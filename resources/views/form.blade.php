<!DOCTYPE html>
<html>
<head>
    <title>Desa Segaran</title>

    <!-- CDN Asset -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
{{--    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>--}}
    <!-- Custom Asset -->
{{--    <link rel="stylesheet" href="/segaran_app/static/css/custom.css"/>--}}
{{--    <script type="text/javascript" src="/segaran_app/static/js/custom.js"></script>--}}
</head>
</html>
<body>
<div class="content">
    <br/>
    <div class="container" style="box-shadow: 1px 1px 10px #9999;">
        <h1></h1>
        <a href="/dashboard">HOME</a>
        <div style="padding:20px;">
            <form t-attf-action="/post_form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <label>NOMOR KK</label>
                    <input type="text" class="form-control" id="nomor_kk" name="nomor_kk" />
                    <br/>
                    <label>NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" />
                    <br/>
                    <label>NAMA</label>
                    <input type="text" class="form-control" id="nama" name="nama" />
                    <br/>
                    <label>HUBUNGAN KELUARGA</label>
                    <input type="text" class="form-control" id="hubungan_keluarga" name="hubungan_keluarga" />
                    <br/>
                    <label>JENIS KELAMIN</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                    <br/>
                    <label>TEMPAT LAHIR</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" />
                    <br/>
                    <label>RT</label>
                    <input type="text" class="form-control" id="rt" name="rt" />
                    <br/>
                    <label>DUSUN</label>
                    <input type="text" class="form-control" id="dusun" name="dusun" />
                    <br/>
                    <label>STATUS PENDIDIKAN</label>
                    <input type="text" class="form-control" id="status_pendidikan" name="status_pendidikan" />
                    <br/>
                    <label>PEKERJAAN</label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" />
                    <br/>
                    <label>NAMA AYAH</label>
                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" />

                    <!--    <div class="input-group mb-3">-->
                    <!--        <input type="text" class="form-control" id="city" name="city" placeholder="City"/>-->

                    <!--        <select class="form-control" id="state" name="state">-->
                    <!--            <t t-foreach="state" t-as="item">-->
                    <!--                <option t-att-value="item.id">-->
                    <!--                    <t t-esc="item.name"/>-->
                    <!--                </option>-->
                    <!--            </t>-->
                    <!--        </select>-->

                    <!--        <input type="text" class="form-control" id="zip" name="zip" placeholder="ZIP"/>-->
                    <!--    </div>-->

                    <!--    <select class="form-control" id="country" name="country">-->
                    <!--        <t t-foreach="country" t-as="item">-->
                    <!--            <option t-att-value="item.id">-->
                    <!--                <t t-esc="item.name"/>-->
                    <!--            </option>-->
                    <!--        </t>-->
                    <!--    </select>-->

                    <!--    <br/>-->
                    <!--    <label>TIN</label>-->
                    <!--    <input type="text" class="form-control" id="tin" name="tin" placeholder="e.g. BE05525"/>-->

                    <!--    <br/>-->
                    <!--    <label>Job</label>-->
                    <!--    Position-->
                    <!--    <input type="text" class="form-control" id="j_position" name="j_position"-->
                    <!--           placeholder="e.g Sales Doctor"/>-->

                </div>

                <div class="col-md-6">

                    <!--    <br/>-->

                    <label>Photo</label>
                    <!--    <input type="file" class="form-control" name="photo" id="photo" data-show-upload="true" data-show-caption="true" lass="file" data-show-preview="true"></input>-->

                    <!--    <label>Phone</label>-->
                    <!--    <input type="text" class="form-control" id="phone" name="phone"/>-->

                    <!--    <br/>-->
                    <!--    <label>Mobile</label>-->
                    <!--    <input type="text" class="form-control" id="mobile" name="mobile"/>-->

                    <!--    <br/>-->
                    <!--    <label>Email</label>-->
                    <!--    <input type="email" class="form-control" id="email" name="email"/>-->

                    <!--    <br/>-->
                    <!--    <label>Website</label>-->
                    <!--    <input type="text" class="form-control" id="web" name="web"-->
                    <!--           placeholder="e.g www.tigernix.com"/>-->

                    <!--    <br/>-->
                    <!--    <label>Title</label>-->
                    <!--    <select class="form-control" id="title" name="title">-->
                    <!--        <t t-foreach="title" t-as="item">-->
                    <!--            <option t-att-value="item.id">-->
                    <!--                <t t-esc="item.name"/>-->
                    <!--            </option>-->
                    <!--        </t>-->
                    <!--    </select>-->

                    <!--    <br/>-->

                    <!--    <label>Language</label>-->
                    <!--    <select class="form-control" id="language" name="language">-->
                    <!--        <option value="en_US">English</option>-->
                    <!--        <option value="en_US">japan</option>-->
                    <!--    </select>-->
                    <!--    <br/>-->

                </div>

                <button type="submit" class="btn btn-primary" id="btn_submit" style="float:right; margin-bottom:25px">Create
                </button>
            </form>
        </div>
    </div>
    <br/>
</div>
</body>
