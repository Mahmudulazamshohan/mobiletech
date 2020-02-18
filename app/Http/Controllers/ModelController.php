<?php

namespace App\Http\Controllers;

use App\Battery;
use App\Body;
use App\Brand;
use App\Camera;
use App\Category;
use App\Connectivity;
use App\Display;
use App\Features;
use App\Launch;
use App\Memory;
use App\Models;
use App\More;
use App\Network;
use App\Platform;
use App\Repositories\ModelsRepository;
use App\Sound;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModelController extends Controller
{
    /**
     * @var ModelsRepository
     */
    private $modelsRepository;

    /**
     * ModelController constructor.
     * @param ModelsRepository $modelsRepository
     */
    public function __construct(ModelsRepository $modelsRepository)
    {
        $this->middleware('auth');
        $this->modelsRepository = $modelsRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Models::all();
        return view('model.show', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('model.create', compact('brands', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::beginTransaction();
        try {
            $models = new Models();
            $models->brand_id = $request->brand_id;
            $models->category_id = $request->category_id;
            $models->name = $request->name;
            $models->image = $this->modelsRepository->storeModelImage($request);
            $models->model_name = $request->model_name;
            $models->old_price = $request->old_price;
            $models->current_price = $request->current_price;
            $models->save();
            if ($models) {
                //Network
                $network = new Network();
                $network->model_id = $models->id;
                $network->network_type = $request->network_type;
                $network->network_2g = $request->network_2g;
                $network->network_3g = $request->network_3g;
                $network->network_4g = $request->network_4g;
                $network->network_5g = $request->network_5g;
                $network->speed = $request->speed;
                $network->gprs = $request->gprs;
                $network->edge = $request->edge;
                $network->save();
                // Launch
                $launch = new Launch();
                $launch->model_id = $models->id;
                $launch->launch_announcement = $request->launch_announcement;
                $launch->launch_date = $request->launch_date;
                $launch->save();
                // Body
                $body = new Body();
                $body->model_id = $models->id;
                $body->body_dimensions = $request->body_dimensions;
                $body->body_weight = $request->body_weight;
                $body->build = $request->build;
                $body->network_sim = $request->network_sim;
                $body->save();
                // Display
                $dispay = new Display();
                $dispay->model_id = $models->id;
                $dispay->display_type = $request->display_type;
                $dispay->display_size = $request->display_size;
                $dispay->display_resolution = $request->display_resolution;
                $dispay->display_multitouch = $request->display_multitouch;
                $dispay->display_density = $request->display_density;
                $dispay->display_screen_protection = $request->display_screen_protection;
                $dispay->save();
                // Platform
                $platform = new Platform();
                $platform->model_id = $models->id;
                $platform->operating_system = $request->operating_system;
                $platform->os_version = $request->os_version;
                $platform->user_interface = $request->user_interface;
                $platform->cpu = $request->cpu;
                $platform->gpu = $request->gpu;
                $platform->chipset = $request->chipset;
                $platform->save();
                // Memory
                $memory = new Memory();
                $memory->model_id = $models->id;
                $memory->memory_internal = $request->memory_internal;
                $memory->memory_external = $request->memory_external;
                $memory->ram = $request->ram;
                $memory->save();
                //Camera
                $camera = new Camera();
                $camera->model_id = $models->id;
                $camera->primary_camera = $request->primary_camera;
                $camera->secondary_camera = $request->secondary_camera;
                $camera->camera_features = $request->camera_features;
                $camera->video = $request->video;
                $camera->save();
                // Sound
                $sound = new Sound();
                $sound->model_id = $models->id;
                $sound->audio = $request->audio;
                $sound->loudspeaker = $request->loudspeaker;
                $sound->jack = $request->jack;
                $sound->save();
                //Connectivity
                $connectivity = new Connectivity();
                $connectivity->model_id = $models->id;
                $connectivity->wifi = $request->wifi;
                $connectivity->bluetooth = $request->bluetooth;
                $connectivity->usb = $request->usb;
                $connectivity->fm_radio = $request->fm_radio;
                $connectivity->gps = $request->gps;
                $connectivity->save();
                // Features
                $features = new Features();
                $features->model_id = $models->id;
                $features->sensors = $request->sensors;
                $features->messaging = $request->messaging;
                $features->browser = $request->browser;
                $features->java = $request->java;
                $features->save();
                // Battery
                $battery = new Battery();
                $battery->model_id = $models->id;
                $battery->battery_type = $request->battery_type;
                $battery->battery_capacity = $request->battery_capacity;
                $battery->battery_charging = $request->battery_charging;
                $battery->save();
                //More
                $more = new More();
                $more->model_id = $models->id;
                $more->made_by = $request->made_by;
                $more->body_color = $request->body_color;
                $more->other_features = $request->other_features;
                $more->save();
                DB::commit();
                if ($models) {
                    return redirect()
                        ->route('model.index')
                        ->with('success', 'Model Created Successfully');
                } else {
                    return redirect()
                        ->back()
                        ->with('failed', 'Model Create failed');
                }


            } else {
                DB::rollBack();
            }
        } catch (\Exception $exception) {
            echo $exception->getMessage();
            DB::rollBack();
            // Get if any exception error

        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brand::all();
        $categories = Category::all();
        $models = Models::find($id);
        return view('model.edit', compact('models','brands', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
