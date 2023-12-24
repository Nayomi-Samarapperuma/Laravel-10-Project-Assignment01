<template>
  <div>
    <h1>Create Student</h1>
    <form @submit.prevent="handleSubmit">
      <div>
        <label for="name">Name:</label>
        <input type="text" v-model="form.name" id="name" />
      </div>
      <div>
        <label for="age">Age:</label>
        <input type="number" v-model="form.age" id="age" />
      </div>
      <div>
        <label for="status">Status:</label>
        <select v-model="form.status" id="status">
          <option value="active">Active</option>
          <option value="inactive">Inactive</option>
        </select>
      </div>
      <button type="submit">Save</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        name: '',
        age: '',
        status: 'active',
      },
    };
  },
  methods: {
    async handleSubmit() {
      await this.$inertia.post('/students', this.form);
    },
  },
};
</script>
