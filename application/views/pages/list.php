<h1><?= $title ?></h1>

<ul>
    <?php foreach($tasks as $task): ?>

                <h3><?= $task['title']; ?></h3>
                <p><?= $task['date']; ?></p>

                <?= form_open('tasks/done_task/'.$task['id']); ?>
                <button type="submit" class="btn btn-primary btn-sm">Done</button>
            </form>
        
    <?php endforeach; ?>
</ul>
