<template>
    <div>
        <app-layout>
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Manage Cars
                </h2>
            </template>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                            <div class="mb-4">
                                <a :href="route('cars-create')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Car</a>
                            </div>
                            <table class="table-fixed w-full">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="px-4 py-2">Brand</th>
                                        <th class="px-4 py-2">Type</th>
                                        <th class="px-4 py-2">Price</th>
                                        <th class="px-4 py-2">Action</th>                               
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="car in cars" v-bind:key="car.id">
                                        <td class="border px-4 py-2 text-center">{{ car.brand }}</td>
                                        <td class="border px-4 py-2 text-center">{{ car.type }}</td>
                                        <td class="border px-4 py-2 text-center">{{ car.price}}</td>
                                        <td class="border px-4 py-2 button-padding text-center">
                                            <a :href="route('cars-edit', car.id)" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded m-1">show</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </app-layout>
    </div>
</template>
<script>
import AppLayout from '@/Layouts/AppLayout.vue'
import Welcome from '@/Pages/Welcome.vue'
export default {
    components: {
        AppLayout,
        Welcome,
    },
    props: ['cars'],
}
</script>
