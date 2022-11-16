<template>
    <div>
        <app-layout>
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Edit Car
                </h2>
            </template>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                        <form @submit.prevent="updateCar()">
                            <div class="grid grid-cols-2">
                                <div class="m-1">
                                    <label>Brand:</label>
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" v-model="form.brand"/>
                                    <jet-input-error :message="form.errors.brand" class="mt-2 first-letter-capitalize" />
                                </div>
                                <div class="m-1">
                                    <label>Type:</label>
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" v-model="form.type"/>
                                    <jet-input-error :message="form.errors.type" class="mt-2 first-letter-capitalize" />
                                </div>
                                <div class="m-1">
                                    <label>Mileage:</label>
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" v-model="form.mileage"/>
                                    <jet-input-error :message="form.errors.mileage" class="mt-2 first-letter-capitalize" />
                                </div>
                                <div class="m-1">
                                    <label>Color:</label>
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" v-model="form.color"/>
                                    <jet-input-error :message="form.errors.color" class="mt-2 first-letter-capitalize" />
                                </div>
                                <div class="m-1">
                                    <label>Price:</label>
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" v-model="form.price"/>
                                    <jet-input-error :message="form.errors.price" class="mt-2 first-letter-capitalize" />
                                </div>
                            </div>
                            <button type="submit" value="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" :disabled="form.processing">
                                Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </app-layout>
    </div>
</template>
<script>
import AppLayout from '@/Layouts/AppLayout.vue'
import Welcome from '@/Pages/Welcome.vue'
import JetFormSection from '@/Components/FormSection.vue'

export default {
    components: {
        AppLayout,
        Welcome,
        JetFormSection,
    },
    props: ['car'],
    data() {
        return {
            form: this.$inertia.form({
                _method: 'POST',
                brand: this.car.brand,
                type: this.car.type,
                mileage: this.car.mileage,
                color: this.car.color,
                price: this.car.price,
            })
        }
    },
    methods: {
        updateCar() {
            this.form.put(route('cars-update', this.car.id), {
                errorBag: 'cars-update',
                preserveScroll: true,
            });
        }
    }
}
</script>
