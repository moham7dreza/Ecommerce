<div>
    <?php if($component->debugIsEnabled()): ?>
        <?php
            $debuggable = [
                'query' => $component->getQuerySql(),
                'filters' => $component->getAppliedFilters(),
                'sorts' => $component->getSorts(),
                'search' => $component->getSearch(),
                'select-all' => $component->getSelectAllStatus(),
                'selected' => $component->getSelected(),
            ];
        ?>

        <p><strong><?php echo app('translator')->get('Debugging Values'); ?>:</strong></p>

        <?php if(! app()->runningInConsole()): ?>
            <div class="mb-4"><?php dump($debuggable); ?></div>
        <?php endif; ?>
    <?php endif; ?>
</div>
<?php /**PATH C:\CODEX\techzilla\vendor\rappasoft\laravel-livewire-tables\src\/../resources/views/includes/debug.blade.php ENDPATH**/ ?>