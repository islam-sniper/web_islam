<?php require_once("header.php"); ?>

<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-4">

                <div class="card" style="border-radius: 15px;">
                    <div class="card-body text-center">
                        <div class="mt-3 mb-4">
                            <img src="https://placehold.co/600x400" class="rounded-circle img-fluid" style="width: 100px;" />
                        </div>
                        <h4 class="mb-2">Julie L. Arsenault</h4>
                        <p class="text-muted mb-4">@Programmer <span class="mx-2">|</span> <a href="#!">mdbootstrap.com</a></p>
                        <div class="mb-4 pb-2">
                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary btn-floating">
                                <i class="fab fa-facebook-f fa-lg"></i>
                            </button>
                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary btn-floating">
                                <i class="fab fa-twitter fa-lg"></i>
                            </button>
                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary btn-floating">
                                <i class="fab fa-skype fa-lg"></i>
                            </button>
                        </div>
                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-rounded btn-lg">
                            Message now
                        </button>
                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                            <div>
                                <p class="mb-2 h5">8471</p>
                                <p class="text-muted mb-0">Wallets Balance</p>
                            </div>
                            <div class="px-3">
                                <p class="mb-2 h5">8512</p>
                                <p class="text-muted mb-0">Income amounts</p>
                            </div>
                            <div>
                                <p class="mb-2 h5">4751</p>
                                <p class="text-muted mb-0">Total Transactions</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<div class="contaner">
    <div class="row">
        <div class="col-6 offset-3 bg-secondary rounded-3">
            <form class="row g-3 needs-validation pt-5" action="storePost.php" method="post" enctype="multipart/form-data">
                <div class="col-6 offset-3">
                    <label for="" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="" value="">
                </div>
                <div class="col-6 offset-3">
                    <label for="" class="form-label">content</label>
                    <textarea class="form-control" name="content" ></textarea>
                </div>
                <div class="col-6 offset-3">
                    <label for="" class="form-label">Add photo</label>
                    <input type="file" name="img" class="form-control">
                </div>
                <div class="col-6 offset-3 mt-5 mb-5">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
            
            
        </div>
<div class="col-6 offset-3 rounded-3">
    <div class="card border-primary mt-5">
                <img class="card-img-top" src="" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
</div>
        
    </div>
</div>


<?php require_once("footer.php"); ?>