<?php

namespace Webkul\API\Http\Controllers\Shop;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Contains current guard
     *
     * @var array
     */
    protected $guard;

    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * Repository object
     *
     * @var \Webkul\Core\Eloquent\Repository
     */
    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->guard = request()->has('token') ? 'api' : 'customer';

        $this->_config = request('_config');

        if (isset($this->_config['authorization_required']) && $this->_config['authorization_required']) {

            auth()->setDefaultDriver($this->guard);

            $this->middleware('auth:' . $this->guard);
        }

        if ($this->_config) {
            $this->repository = app($this->_config['repository']);
        }
    }

    /**
     * Returns a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //custom code 
        
              $slider_array = DB::select("select * from sliders");
        $slider_array_updated = array();
        foreach($slider_array as $slider){
           // dd($slider->path);
            array_push($slider_array_updated, "http://shopstorage.webdevelopmentagency.in/app/public/". $slider->path);
        }
        // dd($slider_array_updated);

        return response()->json([
            'result' => $slider_array_updated,
            'message' => 'slider data fetch', 'response_code' => 200, 'status' => 1,
        ], 200);
        
        
        
        //Bagisto  framework code 
        // $query = $this->repository->scopeQuery(function($query) {
        //     if (isset($this->_config['authorization_required']) && $this->_config['authorization_required']) {
        //         $query = $query->where('customer_id', auth()->user()->id );
        //     }

        //     foreach (request()->except(['page', 'limit', 'pagination', 'sort', 'order', 'token']) as $input => $value) {
        //         $query = $query->whereIn($input, array_map('trim', explode(',', $value)));
        //     }

        //     if ($sort = request()->input('sort')) {
        //         $query = $query->orderBy($sort, request()->input('order') ?? 'desc');
        //     } else {
        //         $query = $query->orderBy('id', 'desc');
        //     }

        //     return $query;
        // });

        // if (is_null(request()->input('pagination')) || request()->input('pagination')) {
        //     $results = $query->paginate(request()->input('limit') ?? 10);
        // } else {
        //     $results = $query->get();
        // }

        // return $this->_config['resource']::collection($results);
    }

    /**
     * Returns a individual resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        $query = isset($this->_config['authorization_required']) && $this->_config['authorization_required'] ?
                $this->repository->where('customer_id', auth()->user()->id)->findOrFail($id) :
                $this->repository->findOrFail($id);

        return new $this->_config['resource']($query);
    }

    //Custom function
    public function sliderget(){

        $slider_array = DB::select("select * from sliders");
        $slider_array_updated = array();
        foreach($slider_array as $slider){
           // dd($slider->path);
            array_push($slider_array_updated, "http://shopstorage.webdevelopmentagency.in/app/public/". $slider->path);
        }
        // dd($slider_array_updated);

        return response()->json([
            'result' => $slider_array_updated,
            'message' => 'slider data fetch', 'response_code' => 200, 'status' => 1,
        ], 200);
    }
    /**
     * Delete's a individual resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wishlistProduct = $this->repository->findOrFail($id);

        $this->repository->delete($id);

        return response()->json([
            'message' => 'Item removed successfully.',
        ]);
    }


}
