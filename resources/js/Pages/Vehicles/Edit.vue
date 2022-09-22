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
    name: "Edit",
    props: {
        vehicle: Object,
        vehicle_models: Array
    },
    data() {
        return {
            form: this.$inertia.form({
                vehicle_model_id: this.vehicle.vehicle_model_id,
                chassis_number: this.vehicle.chassis_number,
                title: this.vehicle.title,
                description: this.vehicle.description,
                image: this.vehicle.image
            })
        }
    },
    methods: {
        submit() {
            this.$inertia.put(route('vehicles.update', this.vehicle), this.form);
        }
    }
}
</script>

<style scoped>

</style>
