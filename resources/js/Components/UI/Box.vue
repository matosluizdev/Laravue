<template>
    <div class="p-4 border border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:text-gray-300">
        <div class="font-medium text-gray-500">
            <slot name="header" />
        </div>
        <slot />
    </div>
</template>
