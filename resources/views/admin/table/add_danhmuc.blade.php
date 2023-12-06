@extends('./layouts.admin_layout')
@section('contents')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Danh mục sản phẩm
        </header>
        <div class="panel-body">
            <div class="position-center">
                <form role="form" action="them-moi-nganh-hang" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên danh mục</label>
                        <input type="text" class="form-control" name="nganhhang" id="exampleInputEmail1"
                            value="Nhập Tên danh mục" onfocus="this.value=''">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh danh mục</label>
                        <input type="file" id="avata_nh" name="anhnganhhang">
                        <img id="preview" style="display:none; width:200px;">
                        <script>
                        document.getElementById("avata_nh").addEventListener("change", function() {
                            let preview = document.getElementById("preview");
                            let file = this.files[0];
                            let reader = new FileReader();

                            reader.onloadend = function() {
                                preview.src = reader.result;
                                preview.style.display = "block";
                            }

                            if (file) {
                                reader.readAsDataURL(file);
                            } else {
                                preview.src = "";
                            }
                        });
                        </script>
                        <!-- <p class="help-block">Example block-level help text here.</p> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên Thương Hiệu</label>
                        <input type="text" class="form-control" name="thuonghieu" id="exampleInputEmail1"
                            value="Nhập Tên Thương Hiệu" onfocus="this.value=''">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-info">Thêm Dữ Liệu</button>
                    </div>


                </form>
            </div>
        </div>


    </section>

</div>

@endsection