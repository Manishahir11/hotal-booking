
            let general_data, contacts_data;
            let genetal_s_form = document.getElementById('genetal_s_form');
            let contacts_s_form = document.getElementById('contacts_s_form');


            let site_title_inp = document.getElementById('site_title_inp');
            let site_about_inp = document.getElementById('site_about_inp');

            let team_s_form = document.getElementById('team_s_form');
            let member_name_inp = document.getElementById('member_name_inp');
            let member_pic_inp = document.getElementById('member_pic_inp');

            function get_general() {
                let site_title = document.getElementById('site_title');
                let site_about = document.getElementById('site_about');



                let shutdown_toggle = document.getElementById('shutdonw-toggle');


                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_crud.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function () {
                    general_data = JSON.parse(this.responseText);
                    site_title.innerText = general_data.site_title;
                    site_about.innerText = general_data.site_about;

                    site_title_inp.value = general_data.site_title;
                    site_about_inp.value = general_data.site_about;

                    if (general_data.shutdown == 0) {
                        shutdown_toggle.checked = false;
                        shutdown_toggle.value = 0;

                    }
                    else {
                        shutdown_toggle.checked = true;
                        shutdown_toggle.value = 1;

                    }

                }
                xhr.send('get_general')
            }

            genetal_s_form.addEventListener('submit', function (e) {
                e.preventDefault();
                upd_general(site_title_inp.value, site_about_inp.value);

            })
            function upd_general(site_title_val, site_about_val) {

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_crud.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function () {
                    // general_data = JSON.parse(this.responseText);
                    // site_title.innerText = general_data.site_title;
                    // site_about.innerText = general_data.site_about;

                    // site_title_inp.value = general_data.site_title;
                    // site_about_inp.value = general_data.site_about;
                    var myModal = document.getElementById('general-st')
                    var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
                    modal.hide()
                    if (this.responseText == 1) {
                        alert('success', 'Changes seved!');
                        get_general();
                    }
                    else {
                        alert('error', 'No Changes!');
                    }
                }
                xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val + '&upd_general')

            }

            function upd_shutdown(val) {
                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_crud.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function () {


                    if (this.responseText == 1 && general_data.shutdown == 0) {
                        alert('success', 'Site has been Shutdown!');
                    }
                    else {
                        alert('success', 'Shutdown mode off!');
                    }
                    get_general();
                }
                xhr.send('&upd_shutdown=' + val);
            }

            // <!-- contact settings -->

            function get_contacts() {

                let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw'];
                let iframe = document.getElementById('iframe');

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_crud.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function () {
                    contacts_data = JSON.parse(this.responseText);
                    contacts_data = Object.values(contacts_data)

                    for (i = 0; i < contacts_p_id.length; i++) {
                        document.getElementById(contacts_p_id[i]).innerText = contacts_data[i + 1];
                    }
                    iframe.src = contacts_data[9];
                    contacts_inp(contacts_data);

                }
                xhr.send('get_contacts')
            }
            function contacts_inp(data) {
                let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];

                for (i = 0; i < contacts_inp_id.length; i++) {
                    document.getElementById(contacts_inp_id[i]).value = data[i + 1];
                }

            }

            contacts_s_form.addEventListener('submit', function (e) {
                e.preventDefault();
                upd_contacts();

            });
            function upd_contacts() {
                let index = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw', 'iframe'];
                let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];

                let data_str = "";
                for (i = 0; i < index.length; i++) {
                    data_str += index[i] + '=' + document.getElementById(contacts_inp_id[i]).value + '&';
                }
                data_str += 'upd_contacts'
                console.log(data_str);

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_crud.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function () {
                    var myModal = document.getElementById('contacts-s')
                    var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
                    modal.hide();

                    if (this.responseText == 1) {
                        alert('success', 'Changes seved!');
                        get_contacts();
                    }
                    else {
                        alert('error', 'No Changes made!');
                    }

                }
                xhr.send(data_str);
            }

            // <!-- team settings -->

            team_s_form.addEventListener('submit', function (e) {
                e.preventDefault();
                add_member();

            });

            function add_member() {
                let data = new FormData();
                data.append('name', member_name_inp.value);
                data.append('picture', member_pic_inp.files[0]);
                data.append('add_member', '');

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_crud.php", true);

                xhr.onload = function () {
                    console.log(this.responseText);
                    var myModal = document.getElementById('management-s')
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
                        member_name_inp.value = "";
                        member_pic_inp.value = "";
                        get_member();
                    }
                }
                xhr.send(data);
            }

            function get_member() {

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_crud.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function () {
                    document.getElementById('team-data').innerHTML= this.responseText;

                }
                xhr.send('get_member');
            }

            function rem_member(val) {
                

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_crud.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function () {
                   
                   if(this.responseText == 1){
                    alert('success','remove member');
                    get_member();
                   }
                   else{
                    alert('error','server down member not removed')
                   }

                }
                xhr.send('rem_member='+val)
            }

            

            window.onload = function () {
                get_general();
                get_contacts();
                get_member();
            }
        