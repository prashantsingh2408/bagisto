<?php

namespace Webkul\API\Http\Controllers\Shop;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\API\Http\Resources\Catalog\Product as ProductResource;

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
            
            
            
        
            //Fetch required data only
            $productsReq =[];
            $i =0;
            //$id=[];
            $products2=array();
            foreach ($products as $product){
               
                $id=$product->id;
                $name=$product->name;
                $price=$product->price;
                $image=$products[0]->images[0]->path;
                
                $product2 = array("id"=>$id, "name"=>$name, "price"=>$price,"image"=>$image);
                
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
