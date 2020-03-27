@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-5 mb-4">
            <div class="card rounded-0 p-3">
                <h3 class="text-uppercase border-bottom pb-3">REST API for blog</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, provident, itaque. Atque minima sapiente maiores voluptatibus, voluptatem incidunt sed eos. Molestiae odit deserunt ipsa iste, repellat saepe mollitia veniam nisi ipsum rem architecto commodi, nesciunt est, voluptas quas minima facilis sequi doloremque itaque. At libero, quibusdam minima nihil. Velit explicabo eos debitis sapiente, voluptas quaerat molestiae placeat inventore aperiam repudiandae quos fugit quis ipsam quae nisi! Laboriosam repellat molestias nisi, vel id, atque, modi magnam eos reiciendis asperiores mollitia veniam labore. Est unde, temporibus esse sapiente excepturi culpa cumque natus quas sit enim, voluptates deserunt eaque quam tenetur facere consequatur.</p>
            </div>
        </div>

        <div class="col-lg-7 mb-4">
            <div class="card rounded-0 p-3">
                <h3 class="text-uppercase border-bottom pb-3">REST API for blog</h3>
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header py-1" id="headingOne">
                      <h2 class="mb-0">
                        <button class="text-dark font-18 btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Get All Posts
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <p>Type: GET</p>
                        <p><b>URL:</b> <span class="text-danger font-18">http://rest.nasirkhan.me/api/posts</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header py-1" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="text-dark font-18 btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Get Single Post
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <p>Type: GET</p>
                        <p><b>URL:</b> <span class="text-danger font-18">https://rest.nasirkhan.me/api/posts/{id}</span></p>
                        <p><b>Example:</b> <span class="text-danger font-18">https://rest.nasirkhan.me/api/posts/10</span></p>
                      </div>
                    </div>
                  </div>


                  <div class="card">
                    <div class="card-header py-1" id="headingThree">
                      <h2 class="mb-0">
                        <button class="text-dark font-18 btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          All categories of a post
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <p>Type: GET</p>
                        <p><b>URL:</b> <span class="text-danger font-18">https://rest.nasirkhan.me/api/posts/{post-id}/categories</span></p>
                        <p><b>Example:</b> <span class="text-danger font-18">https://rest.nasirkhan.me/api/posts/12/categories</span></p>                      
                    </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header py-1" id="tab4">
                      <h2 class="mb-0">
                        <button class="text-dark font-18 btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#coll4" aria-expanded="false" aria-controls="coll4">
                          All Comments of a post
                        </button>
                      </h2>
                    </div>
                    <div id="coll4" class="collapse" aria-labelledby="tab4" data-parent="#accordionExample">
                      <div class="card-body">
                        <p>Type: GET</p>
                        <p><b>URL:</b> <span class="text-danger font-18">https://rest.nasirkhan.me/api/posts/{post-id}/comments</span></p>
                        <p><b>Example:</b> <span class="text-danger font-18">https://rest.nasirkhan.me/api/posts/12/comments</span></p>                      
                    </div>
                    </div>
                  </div>

                  <div class="card ">
                    <div class="card-header py-1" id="tab5">
                      <h2 class="mb-0">
                        <button class="text-dark font-18 btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#coll5" aria-expanded="false" aria-controls="coll5">
                          All Categories
                        </button>
                      </h2>
                    </div>
                    <div id="coll5" class="collapse" aria-labelledby="tab5" data-parent="#accordionExample">
                      <div class="card-body">
                        <p>Type: GET</p>
                        <p><b>URL:</b> <span class="text-danger font-18">https://rest.nasirkhan.me/api/categories</span></p>
                    </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header py-1" id="tab6">
                      <h2 class="mb-0">
                        <button class="text-dark font-18 btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#coll6" aria-expanded="false" aria-controls="coll6">
                          Single Category
                        </button>
                      </h2>
                    </div>
                    <div id="coll6" class="collapse" aria-labelledby="tab6" data-parent="#accordionExample">
                      <div class="card-body">
                        <p>Type: GET</p>
                        <p><b>URL:</b> <span class="text-danger font-18">https://rest.nasirkhan.me/api/categories/{id}</span></p>
                        <p><b>Example:</b> <span class="text-danger font-18">https://rest.nasirkhan.me/api/categories/12</span></p>  
                    </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header py-1" id="tab7">
                      <h2 class="mb-0">
                        <button class="text-dark font-18 btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#coll7" aria-expanded="false" aria-controls="coll7">
                          All posts of s category
                        </button>
                      </h2>
                    </div>
                    <div id="coll7" class="collapse" aria-labelledby="tab7" data-parent="#accordionExample">
                      <div class="card-body">
                        <p>Type: GET</p>
                        <p><b>URL:</b> <span class="text-danger font-18">https://rest.nasirkhan.me/api/categories/{id}/posts</span></p>
                        <p><b>Example:</b> <span class="text-danger font-18">https://rest.nasirkhan.me/api/categories/12/posts</span></p>  
                    </div>
                    </div>
                  </div>


                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="card rounded-0 p-3">
                <h5 class="text-uppercase border-bottom pb-3">Post Table</h5>
                <h6 class="text-info font-weight-bold text-center mb-2">Columns Name</h6>
                <ul>
                    <li>Title</li>
                    <li>Body</li>
                    <li>Description</li>
                    <li>Tag</li>
                </ul>
                <div class="text-center">
                    <h6>Many to Many relation with Category</h6>
                    <h6>One to Many relation with Comment</h6>
                </div>

                <a target="_blank" href="api/posts" class="btn btn-info rounded-0 mt-3">All posts</a>
                <a target="_blank" href="api/posts/12" class="btn btn-info rounded-0 mt-3">Single post</a>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card rounded-0 p-3">
                <h5 class="text-uppercase border-bottom pb-3">Category_Post Table(pivot)</h5>
                <h6 class="text-info font-weight-bold text-center mb-2">Columns Name</h6>
                <ul>
                    <li>category_id</li>
                    <li>post_id</li>
                </ul>

                <a target="_blank" href="api/posts/10/categories" class="btn btn-info rounded-0 mt-3">All categories of post id = 10</a>
                <a target="_blank" href="api/categories/10/posts" class="btn btn-info rounded-0 mt-3">All posts of category id = 10</a>
            </div>

          
           

        </div>
        <div class="col-lg-4 mb-4">
            <div class="card rounded-0 p-3">
                <h5 class="text-uppercase border-bottom pb-3">Category Table</h5>
                <h6 class="text-info font-weight-bold text-center mb-2">Columns Name</h6>
                <ul>
                    <li>Name</li>
                    <li>Description</li>
                </ul>
                <div class="text-center">
                    <h6>Many to Many relation with Post</h6>
                </div>

                <a target="_blank" href="api/categories" class="btn btn-info rounded-0 mt-3">All categories</a>
                <a target="_blank" href="api/categories/12" class="btn btn-info rounded-0 mt-3">Single category</a>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="card rounded-0 p-3">
                <h5 class="text-uppercase border-bottom pb-3">Comments Table</h5>
                <h6 class="text-info font-weight-bold text-center mb-2">Columns Name</h6>
                <ul>
                    <li>post_id</li>
                    <li>Name</li>
                    <li>Comment</li>
                </ul>
                <div class="text-center">
                    <h6>Belongs-to relation with Post</h6>
                </div>

                <a target="_blank" href="api/posts/10/comments" class="btn btn-info rounded-0 mt-3">All Comments of post id = 10</a>
            </div>
        </div>




    </div>
</div>
@endsection