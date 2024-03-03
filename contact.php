<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TGM HOTAL -Contact</title>
    <?php require('inc/links.php') ?>
</head>

<body>
    <?php require('inc/navbar.php') ?>
    <div class="my-4 px-4">
        <h2 class="fw-bold h-font text-center">Contact us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam id cupiditate
            repudiandae <br>
            culpa, dolores aspernatur repellat quaerat cum ducimus accusamus.</p>
    </div>
    <div class="container">
        <div class="row">
        
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rouneded shadow p-4 text-dark">
                    <iframe class="w-100 rounded mb-4"
                        src="<?php echo $contact_r['iframe'] ?>"
                        height="350" loading="lazy"></iframe>
                    <h5>Address</h5>
                    <a href="<?php echo $contact_r['gmap'] ?>" target="_blank"
                        class="text-dark text-decoration-none d-inline-block mb-2">
                        <i class="bi bi-geo-alt-fill"></i><?php echo $contact_r['address'] ?>
                    </a>
                    <h5 class="mt-4">Call us</h5>
                    <a href="#tel: <?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                            class="bi bi-telephone"></i> +<?php echo $contact_r['pn1'] ?></a> <br>
                    <a href="#tel:  <?php echo $contact_r['pn2'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                            class="bi bi-telephone"></i> + <?php echo $contact_r['pn2'] ?></a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: <?php echo $contact_r['email'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope"></i>  <?php echo $contact_r['email'] ?>
                    </a>
                    <h5>follow us</h5>
                    <?php 
                    if ($contact_r['tw']!= '') {
                        echo<<<data
                         <a href="" class="d-inline-block mb-3">
                              <span class="badge bg-light text-dark fs-6 p-2">
                                 <i class="bi bi-twitter me-1"></i>
                             </span>
                          </a>
                        data;
                    }
                    ?>
                    
                    <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i>
                        </span>
                    </a>
                    <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i>
                        </span>
                    </a>

                </div>

            </div>
            <div class="col-lg-6">
                <div class="bg-white rouneded shadow p-4">
                    <form method="POST">
                        <h5>Send message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input name="name" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" name="email" required class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" name="subject" required class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea name="message" required class="form-control shadow-none" rows="4" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" name="send" class="btn btn-dark mt-3">Send</button>

                    </form>

                </div>
            </div> 
        </div>
           

        <?php require('inc/footer.php')?>
        
        <?php 
        if(isset($_POST['send']))
        {
             $frm_data = filteration($_POST);

             $q = "INSERT INTO `users_query`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
             $values =[$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];
             $res =insert($q,$values,'ssss');
             
             if($res==1)
             {
                alert('success','Mail Send!');
             }
             else{
                alert('error','Server down try again letter!');
             }
        }
        
        ?>
</body>

</html>