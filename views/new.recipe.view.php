<div class="container-fluid" style="margin-top: 15px;">
<div class="row">
<div class="col-md-10" style="margin-top: 17px;">            

<h3 class="title-pages">Recipe</h3>

<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

<div class="form-group" style="padding: 0px 10px 0px 0px;">

   <label class="control-label">Title</label>
   <input type="text" value="" placeholder="Title" name="diet_title" class="form-control" required="">

   <label class="control-label">Description</label>
   <textarea value="" name="diet_description" class="form-control" id="description" required=""></textarea>

   <label class="control-label">Ingredients</label>
   <textarea value="" name="diet_ingredients" class="form-control" id="ingredients" required=""></textarea>

   <label class="control-label">Directions</label>
   <textarea value="" name="diet_directions" class="form-control" id="directions" required=""></textarea>

   <label class="control-label">Category</label>
   <select class="form-control" name="diet_category" required="">
    <?php foreach($categories_lists as $categories_list): ?>
   <option value="<?php echo $categories_list['category_id']; ?>"><?php echo $categories_list['category_title']; ?></option>
    <?php endforeach; ?>
   </select> 

   <label class="control-label">Calories</label>
   <input type="text" value="" placeholder="Calories" name="diet_calories" class="form-control" required="">

   <label class="control-label">Carbs</label>
   <input type="text" value="" placeholder="Carbs (Grams)" name="diet_carbs" class="form-control" required="">

   <label class="control-label">Protein</label>
   <input type="text" value="" placeholder="Protein (Grams)" name="diet_protein" class="form-control" required="">

   <label class="control-label">Fat</label>
   <input type="text" value="" placeholder="Fat (Grams)" name="diet_fat" class="form-control" required="">

   <label class="control-label">Servings</label>
   <input type="text" value="" placeholder="Servings" name="diet_servings" class="form-control" required="">

   <label class="control-label">Total Time</label>
   <input type="text" value="" placeholder="Total Time (Minutes)" name="diet_time" class="form-control" required="">

<label class="control-label">Faeatured</label>
   
   <div class="row">
                        <div class="col-sm-1">
                             <div class="radio radio-success">
                                <input type="radio" name="diet_featured" id="radio3" value="1" checked="">
                                <label for="radio3">
                                    Yes
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="radio radio-danger">
                                <input type="radio" name="diet_featured" id="radio4" value="0">
                                <label for="radio4">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>

   <label class="control-label">Status</label>
   
   <div class="row">
                        <div class="col-sm-1">
                             <div class="radio radio-success">
                                <input type="radio" name="diet_status" id="radio5" value="1" checked="">
                                <label for="radio5">
                                    Publish
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="radio radio-danger">
                                <input type="radio" name="diet_status" id="radio6" value="0">
                                <label for="radio6">
                                    Draft
                                </label>
                            </div>
                        </div>
                    </div>

   <label class="control-label">Image</label>
   <input name="diet_image" class="input-file" type="file" required="">
   <span class="text-danger">Recommended size: <b>650 x 350 Pixels</b> </span>

   <div class="action-button">
   <input type="submit" name="save" value="Upload" class="btn btn-embossed btn-primary">
   <input type="reset" name="reset" value="Reset" class="btn btn-embossed btn-danger">
   </div>

</div>
</form>  
</div>
<div class="col-md-2 page-sidebar">  
<?php require'sidebar.view.php'; ?>  
</div>
</div>
</div>
<script type="text/javascript"> CKEDITOR.replace( 'description' ); </script>
<script type="text/javascript"> CKEDITOR.replace( 'ingredients' ); </script>
<script type="text/javascript"> CKEDITOR.replace( 'directions' ); </script>