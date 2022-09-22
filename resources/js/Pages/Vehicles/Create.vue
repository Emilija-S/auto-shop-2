<template>
    <form @submit.prevent="submit">
        <div>
            <label for="chassis_number">Chassis Number</label>
            <input type="text" id="chassis_number" name="chassis_number" v-model="form.chassis_number">
        </div>
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" v-model="form.title">
        </div>
        <div>
            <label for="image">Image</label>
            <input type="text" id="image" name="image" v-model="form.image">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" v-model="form.description">
        </div>
        <div>
            <label for="vehicle_model_id">Vehicle Model Select</label>
            <select name="vehicle_model_id"
                    id="vehicle_model_id"
                    type="text"
                    v-model="form.vehicle_model_id"
            >
                <option v-for="vehicle_model in vehicle_models"
                        :value="vehicle_model.id"
                >
                    {{ vehicle_model.name }}
                </option>
            </select>
        </div>
        <button type="submit">
            SAVE
        </button>
    </form>
</template>

<script>
export default {
    name: "Create",
    data() {
        return {
            form: this.$inertia.form({
                chassis_number: '',
                title: '',
                image: '',
                description: '',
                vehicle_model_id: '',
            })
        }
    },
    props: {
        vehicle_models: Array
    },
    methods: {
        submit() {
            this.$inertia.post(route('vehicles.store'), this.form, {
                onSuccess: () => {
                    this.form.reset();
                }
            });
        }
    }
}
</script>

<style scoped>

</style>
