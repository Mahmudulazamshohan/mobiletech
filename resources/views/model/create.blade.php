@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Create Model</h5>

                    @if(Session::has('success'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
                            I am an alert and I can be dismissed!
                        </div>
                    @elseif(Session::has('failed'))

                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
                            I am an alert and I can be dismissed!
                        </div>
                    @endif
                    <form action="{{route('model.store')}}" method="POST" enctype="multipart/form-data">
                        <h3 style="border-bottom:1px solid #555;padding-bottom: 20px;">
                            Model
                        </h3>
                        @csrf
                        <div class="position-relative form-group">
                            <label class="">Name</label>
                            <input name="name" placeholder="Name" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label class="">Image</label>
                            <input name="image" type="file">
                        </div>
                        <div class="position-relative form-group">
                            <label class="">Category</label>
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="position-relative form-group">
                            <label class="">Brand</label>
                            <select class="form-control" name="brand_id">
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>

                            <div class="position-relative form-group">
                                <label class="">Model Name</label>
                                <input name="model_name" placeholder="Model name" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Old Price</label>
                                <input name="old_price" placeholder="Old Price" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Current Price</label>
                                <input name="current_price" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <h3 style="border-bottom:1px solid #555;padding-bottom: 20px;">
                                Network
                            </h3>
                            <div class="position-relative form-group">
                                <label class="">Network type</label>
                                <input name="network_type" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Network 2g</label>
                                <input name="network_2g" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Network 3g</label>
                                <input name="network_3g" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Network 4g</label>
                                <input name="network_4g" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Network 5g</label>
                                <input name="network_5g" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Speed</label>
                                <input name="speed" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Gprs</label>
                                <input name="gprs" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Edge</label>
                                <input name="edge" placeholder="" type="text"
                                       class="form-control">
                            </div>

                            <h3 style="border-bottom:1px solid #555;padding-bottom: 20px;">
                                Launch
                            </h3>
                            <div class="position-relative form-group">
                                <label class="">Launch Announcement</label>
                                <input name="launch_announcement" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Launch Date</label>
                                <input name="launch_date" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <h3 style="border-bottom:1px solid #555;padding-bottom: 20px;">
                                Body
                            </h3>
                            <div class="position-relative form-group">
                                <label class="">
                                    Body Dimensions</label>
                                <input name="body_dimensions" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Body Weight</label>
                                <input name="body_weight" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">
                                    Build</label>
                                <input name="build" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Network Sim</label>
                                <input name="network_sim" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <h3 style="border-bottom:1px solid #555;padding-bottom: 20px;">
                                Display
                            </h3>
                            <div class="position-relative form-group">
                                <label class="">
                                    Display type</label>
                                <input name="display_type" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Display size</label>
                                <input name="display_size" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">
                                    Display resolution</label>
                                <input name="display_resolution" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Display multitouch</label>
                                <input name="display_multitouch" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Display density</label>
                                <input name="display_density" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <h3 style="border-bottom:1px solid #555;padding-bottom: 20px;">
                                Platform
                            </h3>
                            <div class="position-relative form-group">
                                <label class="">
                                    Operating system</label>
                                <input name="operating_system" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Os version</label>
                                <input name="os_version" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">
                                    User interface</label>
                                <input name="user_interface" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Cpu</label>
                                <input name="cpu" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Gpu</label>
                                <input name="gpu" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Chipset</label>
                                <input name="chipset" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <h3 style="border-bottom:1px solid #555;padding-bottom: 20px;">
                                Memory
                            </h3>
                            <div class="position-relative form-group">
                                <label class="">
                                    Memory Internal</label>
                                <input name="memory_internal" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Memory External</label>
                                <input name="memory_external" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">
                                    Ram</label>
                                <input name="ram" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <h3 style="border-bottom:1px solid #555;padding-bottom: 20px;">
                                Camera
                            </h3>
                            <div class="position-relative form-group">
                                <label class="">
                                    Primary Camera</label>
                                <input name="primary_camera" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Secondary Camera</label>
                                <input name="secondary_camera" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">
                                    Camera Features</label>
                                <input name="camera_features" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">
                                    Video</label>
                                <input name="video" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <h3 style="border-bottom:1px solid #555;padding-bottom: 20px;">
                                Sound
                            </h3>
                            <div class="position-relative form-group">
                                <label class="">
                                    Audio</label>
                                <input name="audio" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Loudspeaker</label>
                                <input name="loudspeaker" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">
                                    3.5mm Jack</label>
                                <input name="jack" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <h3 style="border-bottom:1px solid #555;padding-bottom: 20px;">
                                Connectivity
                            </h3>
                            <div class="position-relative form-group">
                                <label class="">
                                    WiFi</label>
                                <input name="wifi" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Bluetooth</label>
                                <input name="bluetooth" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">
                                    USB</label>
                                <input name="usb" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">
                                    Fm Radio</label>
                                <input name="fm_radio" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">
                                    GPS</label>
                                <input name="gps" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <h3 style="border-bottom:1px solid #555;padding-bottom: 20px;">
                                Features
                            </h3>
                            <div class="position-relative form-group">
                                <label class="">
                                    Sensors</label>
                                <input name="sensors" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Messaging</label>
                                <input name="messaging" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">
                                    Browser</label>
                                <input name="browser" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">
                                    Java</label>
                                <input name="java" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <h3 style="border-bottom:1px solid #555;padding-bottom: 20px;">
                                Battery
                            </h3>
                            <div class="position-relative form-group">
                                <label class="">
                                    Battery Type</label>
                                <input name="battery_type" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Battery Capacity</label>
                                <input name="battery_capacity" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Battery Charging</label>
                                <input name="battery_charging" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <h3 style="border-bottom:1px solid #555;padding-bottom: 20px;">
                                More
                            </h3>
                            <div class="position-relative form-group">
                                <label class="">
                                    Made By</label>
                                <input name="made_by" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">
                                    Body Color</label>
                                <input name="body_color" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Other Features</label>
                                <input name="other_features" placeholder="" type="text"
                                       class="form-control">
                            </div>
                            <button class="mt-1 btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>


@endsection
