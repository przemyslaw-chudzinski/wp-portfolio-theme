<p>
    <label for="<?= $this->get_field_id('title') ?>">Title: </label>
    <input type="text" id="<?= $this->get_field_id('title') ?>" name="<?= $this->get_field_name('title') ?>" value="<?= $this->getWgtTitle($instance) ?>" class="widefat">
</p>

<p>
    <label for="<?= $this->get_field_id('words') ?>">Words per min: </label>
    <input type="text" id="<?= $this->get_field_id('words') ?>" name="<?= $this->get_field_name('words') ?>" value="<?= (int) $this->getWgtWordsPerMin($instance) ?>" class="widefat">
</p>
