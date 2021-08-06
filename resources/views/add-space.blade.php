@extends("layouts.dashboard")
@section("content")
    <div class="col-lg-9 col-md-12 col-xs-12 royal-add-property-area section_100 pl-0 user-dash2">
        <div class="single-add-property">
            <h3>Property description and price</h3>
            <div class="property-form-group">
                <form method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <label for="title">Property Title</label>
                                <input type="text" name="title" id="title" placeholder="Enter your property title" required>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <label for="description">Property Description</label>
                                <textarea id="description" name="desc" placeholder="Describe about your property" required></textarea>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <p class="no-mb">
                                <label for="price">Bedroom</label>
                                <input type="number" name="bedroom" placeholder="1" id="price" required>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <p class="no-mb last">
                                <label for="area">Bathroom</label>
                                <input type="number" name="bathroom" placeholder="1" id="area" required>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <p class="no-mb">
                                <label for="price">Price</label>
                                <input type="text" name="price" placeholder="NGN" id="price" required>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <p class="no-mb last">
                                <label for="area">Percentage discount</label>
                                <input type="number" name="discount" placeholder="x%" id="area" value="0" required>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <p class="no-mb last">
                                <label for="area">Property images</label>
                                <input type="file" name="file[]" id="area" value="0" required>
                            </p>
                        </div>
                    </div>
                    <div class="add-property-button pt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="prperty-submit-button">
                                    <button type="submit">Submit Property</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section("custom-script")
    <script>
        $(".dropzone").dropzone({
            dictDefaultMessage: "<i class='fa fa-cloud-upload'></i> Click here or drop files to upload",
        });

    </script>
    <script>
        $(".header-user-name").on("click", function() {
            $(".header-user-menu ul").toggleClass("hu-menu-vis");
            $(this).toggleClass("hu-menu-visdec");
        });

    </script>
@endsection
