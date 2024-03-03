

            let carousal_s_form = document.getElementById('carousal_s_form');
            let carousal_img_inp = document.getElementById('carousal_img_inp');

           

            carousal_s_form.addEventListener('submit', function (e) {
                e.preventDefault();
                add_image();

            });

            function add_image() {
                let data = new FormData();
                data.append('image', carousal_img_inp.files[0]);
                data.append('add_image', '');

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/carousal_crud.php", true);

                xhr.onload = function () {
                    console.log(this.responseText);
                    var myModal = document.getElementById('carousal-s')
                    var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
                    modal.hide();
                    if (this.responseText == 'inv_img') {
                        alert('error', 'Only jpg and png image allowed');
                    }
                    else if (this.responseText == 'inv_size') {
                        alert('error', 'image size big');
                    }
                    else if (this.responseText == 'upd_faild') {
                        alert('error', 'server down');

                    }
                    else {
                        alert('success', 'new member added');
                        carousal_img_inp.value = "";
                        get_image();
                    }
                }
                xhr.send(data);
            }

            function get_image() {

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/carousal_crud.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function () {
                    document.getElementById('carousal-data').innerHTML= this.responseText;
                 
                }
                xhr.send('get_image');
            }

            function rem_image(val) {
                

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/carousal_crud.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function () {
                   
                   if(this.responseText == 1){
                    alert('success','remove member');
                    get_image();
                   }
                   else{
                    alert('error','server down member not removed')
                   }

                }
                xhr.send('rem_image='+val)
            }

            

            window.onload = function () {
               
                get_image();
            }
        