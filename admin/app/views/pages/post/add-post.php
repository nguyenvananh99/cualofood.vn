<?php
  require_once "./app/views/layouts/header.php";
?>

<div class="modal-body col-sm-8 offset-3">
    <h2 class="text-info">Thêm bài viết</h2>
    <form action="" method="post">
        <div class="form-group">
    <label> Tiêu đề </label>
    <input type="text" name="productName" class="form-control" placeholder="Enter Product">
</div>
 <div class="form-group">
</div>
 <div class="form-group">
  <label>Danh mục</label>
    <select id="category" name="category" class="form-control">
        <option>Chọn Danh Mục</option>

                                         <option value="26" data-name="Giày">Giày</option>
                                                 <option value="21" data-name="Áo">Áo</option>
                                                 <option value="12" data-name="Quần">Quần</option>        
    </select>
</div>
<div class="form-group">
    <label> Mô Tả </label>
    <textarea name="editor1"></textarea>
                <script>
                        CKEDITOR.replace('editor1');
                </script>

</div>
<div class="form-group">

    <label> Ảnh </label>
    <input type="file" name="image" class="form-control">
</div>

<div class="form-group">

    <label> Từ khoá </label>
    <input type="text" name="productName" class="form-control" placeholder="Enter Product">
</div>

<div class="form-group">

    <label> Tác giả </label>

    <input type="text" name="productName" class="form-control" placeholder="Enter Product">
</div>
<!--             <div class="form-group">

    <label> Image Thumbnail </label>
    <input type="file" name="thumb1" class="form-control" >
    <input type="file" name="thumb2" class="form-control" >
    <input type="file" name="thumb3" class="form-control" >
    <input type="file" name="thumb4" class="form-control" >
</div> -->
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Đăng bài</button>
      </div>
      </form>
</div>

<?php
  require_once "./app/views/layouts/footer.php";
?>