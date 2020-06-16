<div class="error">
    <?php echo validation_errors(); ?>
</div>

<?php echo form_open('add_task') ?>

  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label>Date</label>
    <input type="date" class="form-control" name="date">
  </div>

  <button type="submit" class="btn btn-primary">Add task</button>
</form>