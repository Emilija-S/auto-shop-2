<template>
    <form @submit.prevent="submit">
        <div>
            <label for="name">Vehicle Model Name</label>
            <input type="text" id="name" name="name" v-model="form.name">
        </div>
        <div>
            <label for="manufacturer_id">Manufacturer</label>
            <select name="manufacturer_id"
                    id="manufacturer_id"
                    type="text"
                    v-model="form.manufacturer_id"
            >
                <option v-for="manufacturer in manufacturers"
                        :value="manufacturer.id"
                >
                    {{ manufacturer.name }}
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
                name: '',
                manufacturer_id: ''
            })
        }
    },
    props: {
        manufacturers: Array
    },
    methods: {
        submit() {
            this.$inertia.post(route('vehicle-models.store'), this.form, {
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
