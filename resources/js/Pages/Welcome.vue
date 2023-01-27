<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />

    <AuthenticatedLayout>
        <div class="mx-auto md:w-8/12 w-full p-4">
            <div>
                Title goes here
            </div>
            <div>
                Search Bar
            </div>
            <div class="grid grid-cols-12">
                <aside class="col-span-3 border border-red">
                    <div>
                        Filters go here
                    </div>
                </aside>
                <section class="col-span-9 border border-black">
                    Players go here and pagination
                </section>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
