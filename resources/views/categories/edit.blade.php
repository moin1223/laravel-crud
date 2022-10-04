<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
      <div class="bg-light mt-2">
        @php 
        $size = json_decode($category->size);
        print_r($size);
        @endphp
      <form method="POST" action="/category-update/{{ $category->id}}">
      @csrf
        @method('put')
        <h1 class="text-center pt-3">Add new product</h1>
          <div class="p-5">

              <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Product Title</label>
                  <input type="text"  name="title" value="{{$category->title}}"  class="form-control" id="exampleFormControlInput1">
              </div>

               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Product Category</label>
                        <select
                         class="form-select" 
                          name="category"
                           id="floatingSelect"
                            aria-label="Floating label select example
                           
                            ">
                            <option  type="text" selected>Select Category</option>
                            <option 
                            value="Beauty"
                            <?php
                    if($category->category == "Beauty")
                    {
                      echo "selected";
                    }
                    ?>
                            >
                              Beauty
                            </option>
                            <option value="Travel"
                            <?php
                    if($category->category == "Travel")
                    {
                      echo "selected";
                    }
                    ?>
                            
                            >
                              Travel
                            </option>
                            <option value="Business"
                            <?php
                    if($category->category == "Business")
                    {
                      echo "selected";
                    }
                    ?>

                            >
                              Business
                            </option>
                      </select>
               </div>

               <div class="mb-3">
                 <label for="exampleFormControlInput1" class="form-label">Product Freshness</label>
                 
                 <div class="form-check">
                    <input class="form-check-input" type="radio" name="freshness" value="Brand New" id="flexRadioDefault1"
                    <?php
                    if($category->freshness == "Brand New")
                    {
                      echo "checked";
                    }
                    ?>
                    >
                    <label class="form-check-label" for="flexRadioDefault1">
                     Brand New
                    </label>
                  </div>


                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="freshness" value="Second Hand" id="flexRadioDefault1"
                    <?php
                    if($category->freshness == "Second Hand")
                    {
                      echo "checked";
                    }
                    ?>
                    >
                    <label class="form-check-label" for="flexRadioDefault1">
                      Second Hand
                    </label>
                  </div>

                                
              </div>

              <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Size</label>
                      <div class="form-check">
                        <input
                         class="form-check-input" 
                         type="checkbox" name="size[]"
                          value="XL" id="flexCheckDefault">
                            <label class="form-check-label" 
                            for="flexCheckDefault"
                           {{in_array('XL','$size')? 'checked':''}}
                            >
                              XL
                             </label>
                             
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="size[]" value="L" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                             L
                             </label>
                             
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="size[]" value="M" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                             M
                             </label>
                             
                      </div>

              </div>
          <button type="submit" class="btn btn-primary">Create</button>
      </form>
      </div>
</div>
</body>
</html>