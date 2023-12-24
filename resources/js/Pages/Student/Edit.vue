<template>
  <div>
    <h1>Edit Student</h1>
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
  props: ['student'],
  data() {
    return {
      form: {
        name: this.student.name,
        age: this.student.age,
        status: this.student.status,
      },
    };
  },
  methods: {
    async handleSubmit() {
      await this.$inertia.put(`/students/${this.student.id}`, this.form);
    },
  },
};
</script>
