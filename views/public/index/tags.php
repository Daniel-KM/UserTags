<div class='user-tags'>
    <h2><?php echo __('My Tags'); ?></h2>
    <ul class="user-tags-list">
    <?php foreach ($tags as $tag): ?>
        <?php $name = $tag['name']; ?>
        <?php if($link): ?>
            <li class="<?php echo $name; ?>-tag">
                <a href="<?php echo html_escape(url('items/browse')).'?my-tag='.$name; ?>" rel="tag">
                    <?php echo html_escape($name); ?>
                </a>
                <span id='user-tags-tag-id-<?php echo $tag->id; ?>' class='user-tags-tag remove'>
                    <?php echo __('(Remove?)'); ?>
                </span>
            </li>
        <?php else: ?>
            <li><span id='user-tags-tag-id-{$tag->id}' class='user-tags-tag'>" <?php echo html_escape($name); ?></span></li>
        <?php endif; ?>
    <?php endforeach; ?>
    </ul>
    
    <div id="tag-errors">
        <p><?php echo __('This item is already tagged with: '); ?></p>
        <ul>
        </ul>
    </div>

    <?php if(!empty($itemTags)): ?>
        <p class='explanation'><?php echo __('Click existing tags to add them to your own tags.'); ?></p>
        <div class='user-tags-general'><ul>
        <?php foreach($itemTags as $itemTag): ?>
        <li class='user-tags-tag'><?php echo metadata($itemTag, 'name'); ?></li>
        <?php endforeach; ?>
        </ul></div>
    <?php endif; ?>

    <div class='user-tags-new'>    
        <label for='user_tags_new'><?php echo __("Add Tags") ; ?></label>
        <p class='explanation'><?php echo __('Separate tags with %s', option('tag_delimiter')); ?></p>
        <input type="text" name="tags" id="tags" class="textinput" value="" />
        <button id='user-tags-submit'><?php echo __("Add"); ?></button>
    </div>
</div>
