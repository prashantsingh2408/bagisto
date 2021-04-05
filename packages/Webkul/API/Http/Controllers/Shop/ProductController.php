<?php

namespace Webkul\API\Http\Controllers\Shop;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\API\Http\Resources\Catalog\Product as ProductResource;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    /**
     * ProductRepository object
     *
     * @var \Webkul\Product\Repositories\ProductRepository
     */
    protected $productRepository;

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Product\Repositories\ProductRepository $productRepository
     * @return void
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Returns a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return ProductResource::collection($this->productRepository->getAll(request()->input('category_id')));

        try{




            //fetch all product by category_id (bagisto code)
        	$products = ProductResource::collection($this->productRepository->getAll(request()->input('category_id')));
            var_dump($products);



            //Fetch required data only
            $productsReq =[];
            $i =0;
            //$id=[];
            $products2=array();
            //$special_cost_array = array();
            $discount_array = array();
            foreach ($products as $product){


                //Fetch category
                $description = $product->description;
                $category = DB::select('select name from category_translations where description = ?', [$description]);
                //dd($category);
                if(isset($category[0]->name)){
                $category = $category[0]->name;
                }
                else{
                    $category ='not any category';
                }
                //END Get category

                if($product->special_price != null){
                    //dd($product->special_price);
                    $discount = $product->price - $product->special_price;
                }
                else{
                    $discount = 'not discount';
                }

                $product_id=$product->id;
                $name = $product->name;
                $price = $product->price;
                $image = $products[0]->images[0]->path;

                // $special_attribute_id = 13;
                // $actual_attribute_id  = 12;//Id of special price


                // // fetch  discount

                //     // special cost
                //     $special_cost = DB::select('select float_value from product_attribute_values where product_id = ? and attribute_id = ?', [$product_id, $special_attribute_id]);
                //     //$results = DB::select('select * from users where id = :id', ['id' => 1]);

                //     //actual_cost
                //     $actual_cost = DB::select('select float_value from product_attribute_values where product_id = ? and attribute_id = ?', [$product_id, $actual_attribute_id]);

                //     //if cost are not null
                //     if($special_cost[0]->float_value != null
                //              AND
                //     $actual_cost[0]->float_value != null)
                //         $discount = $actual_cost[0]->float_value - $special_cost[0]->float_value;
                //     else{
                //         $discount = 0;
                //     }

                    //put discount in array
                    //($discount_array, $actual_cost[0]->float_value - $special_cost[0]->float_value);
                // END fetch  discount








                $product2 = array("id"=>$product_id, "name"=>$name, "price"=>$price,"discount"=>$discount,"category"=> $category);

                array_push($products2,$product2);

                //array_push($products2[$i],$id);
                //$i=$i + 1;
            }

    	    if($products){

                //Bagisto code
    	        // return \Response::json(['result' =>$products,'message' => 'Products Fetch successfully','response_code' => 200,'status' => 1], 200);

            	//Custom code(require data only)
            	return \Response::json(['result' => $products2,'message' => 'Products Fetch successfully','response_code' => 200,'status' => 1], 200);

    	    }else{

    	    	return \Response::json(['result' =>'','message' => 'Product  not  found','response_code' => 400,'status' => 0], 200);

    	    }

    	}
    	catch(Exception $e)
    	{
    	    return \Response::json(['message' => 'error message', 'status' => 0, 'result' => $e->getMessage()], HttpResponse::HTTP_CONFLICT);
    	}
    }

    /**
     * Returns a individual resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        return new ProductResource(
            $this->productRepository->findOrFail($id)
        );
    }

    /**
     * Returns product's additional information.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function additionalInformation($id)
    {
        return response()->json([
            'data' => app('Webkul\Product\Helpers\View')->getAdditionalData($this->productRepository->findOrFail($id)),
        ]);
    }

    /**
     * Returns product's additional information.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function configurableConfig($id)
    {
        return response()->json([
            'data' => app('Webkul\Product\Helpers\ConfigurableOption')->getConfigurationConfig($this->productRepository->findOrFail($id)),
        ]);
    }
}
