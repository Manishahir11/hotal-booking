

           let features_s_form = document.getElementById('features_s_form');
           let fasilities_s_form = document.getElementById('fasilities_s_form');


           features_s_form.addEventListener('submit', function (e) {
                e.preventDefault();
                add_feature();

            });

            function add_feature() {
                let data = new FormData();
                data.append('name', features_s_form.elements['features_name'].value);
                data.append('add_feature', '');

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/features_facilities.php", true);

                xhr.onload = function () {
                    
                    var myModal = document.getElementById('features-st')
                    var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
                    modal.hide();
                    if (this.responseText == 1) {
                        alert('success', 'new Features added');
                        features_s_form.elements['features_name'].value = "";
                        get_features();
                    }
                    
                    else {
                        alert('error', 'Server down!');
                    }
                }
                xhr.send(data);
            }

            function get_features() {

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/features_facilities.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function () {
                    document.getElementById('features-data').innerHTML= this.responseText;

                }
                xhr.send('get_features');
            }

            function rem_feature(val) {
                

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/features_facilities.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function () {
                   
                   if(this.responseText == 1){
                    alert('success','remove member');
                    get_features();
                   }
                   else if(this.responseText == 'room_added')
                   {
                    alert('success','Feature is added in room!');
                   }
                   else{
                    alert('error','server down feature not removed');
                   }
                   

                }
                xhr.send('rem_feature='+val)
            }

            fasilities_s_form.addEventListener('submit', function (e) {
                e.preventDefault();
                add_facility();

            }); 
             
            function add_facility() {
                let data = new FormData();
                data.append('name', fasilities_s_form.elements['facility_name'].value);
                data.append('icon', fasilities_s_form.elements['facility_icon'].files[0]);
                data.append('desc', fasilities_s_form.elements['facility_desc'].value);
                data.append('add_facility', '');

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/features_facilities.php", true);

                xhr.onload = function () {
                    console.log(this.responseText);
                    var myModal = document.getElementById('facilities-st')
                    var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
                    modal.hide();
                    if (this.responseText == 'inv_img') {
                        alert('error', 'Only  png image allowed');
                    }
                    else if (this.responseText == 'inv_size') {
                        alert('error', 'image size big');
                    }
                    else if (this.responseText == 'upd_faild') {
                        alert('error', 'server down');

                    }
                    else {
                        alert('success', 'new facility added');
                        fasilities_s_form.reset();
                        get_facilities();
                    }
                }
                xhr.send(data);
            }

            function get_facilities() {
                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/features_facilities.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function () {
                    document.getElementById('fasilities-data').innerHTML= this.responseText;

                }
                xhr.send('get_facilities');
            }

            function rem_facility(val) {
                

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/features_facilities.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function () {
                   
                   if(this.responseText == 1){
                    alert('success','remove facility');
                    get_facilities();
                   }
                   else if(this.responseText == 'room_added'){
                    alert('error','Feature is added in room!')
                   }
                   else{
                    alert('error','server down feature not removed')
                   }
                   

                }
                xhr.send('rem_facility='+val)
            }

           
            window.onload = function () {
                get_features();
                get_facilities();
            }
        
   