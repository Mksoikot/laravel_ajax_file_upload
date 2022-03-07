<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset=UTF-8>
    <title>File Uoload</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>

    <body>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 mt-5">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6>laravel Ajax File Upload</h6>
                            </div>
                            <div class="card-body p-3">
                                <input id="FileID" class="form-control my-2" type="file">
                                <button onclick="onUpload()" id="UploadBtnId" class="btn btn-primary btn-block my-3">Upload</button>
                                <h6 id="UploadPercentageID"></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
        <script type="text/javascript">

        function onUpload() {

            let myFile = document.getElementById("FileID").files[0];
            let FileName = myFile.name;
            let FileSize = myFile.size;
            let FileFormet = FileName.split(".").pop();

            let FileData= new FormData();
            FileData.append("Filekey", myFile);

            let config = {
                        headers: { "content-type": "multipart/form-data" },
                        onUploadProgress: function(progressEvent){
                          let UploadPercentange = Math.round((progressEvent.loaded*100)/progressEvent.total)
                          let UploadMB= (progressEvent.loaded)/(1028*1028);
                          let TotalMB= (progressEvent.total)/(1028*1028);
                          let DueMB= TotalMB-UploadMB;
                          $('#UploadPercentageID').html("<b>Uploaded:</b> "+UploadMB.toFixed(2) +"MB  <b>Due:</b> "+DueMB.toFixed(2) +"MB <b>Total:</b> "+TotalMB.toFixed(2)+"MB" )
                        }
                    }


            let url = "/fileup";

            axios.post(url, FileData, config)
                .then(function (response) {
                    if(response.status==200){
                        $('#UploadPercentageID').html('Upload Success');
                        setTimeout(function() {
                            $('#UploadPercentageID').html('');
                        }, 3000)
                    }else{
                        $('#UploadPercentageID').html('Upload Success');
                        setTimeout(function() {
                            $('#UploadPercentageID').html('');
                        }, 3000);
                    }
                })
                .catch(function (error) {
                        $('#UploadPercentageID').html('Upload Fail');
                        setTimeout(function() {
                            $('#UploadPercentageID').html('');
                        }, 3000)
                })
        }


        </script>
    </body>
</html>


