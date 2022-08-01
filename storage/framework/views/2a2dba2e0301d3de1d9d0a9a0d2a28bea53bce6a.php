<div class="form-group required <?php echo e($errors->has($name) ? ' has-error' : ''); ?>">
  <?php $render_label_name = $name ?>
  <?php if($label_name <> null): ?>
  <?php $render_label_name = $label_name ?>
  <?php endif; ?>
  <?php echo e(Form::label($render_label_name, null, ['class' => 'control-label'])); ?> <?php if($required == '*'): ?><strong class="text-danger"> *</strong> <?php endif; ?>
  <?php echo e(Form::textarea($name, $value, array_merge(['class' => 'form-control'], $attributes))); ?>

  <?php if($errors->has($name)): ?>
      <span class="help-block">
          <strong><?php echo e($errors->first($name)); ?></strong>
      </span>
  <?php endif; ?>
</div>
