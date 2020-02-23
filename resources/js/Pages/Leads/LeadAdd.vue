<template>
  <base-layout>
    <div class="container">
      <form @submit.prevent="handleSubmit">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" placeholder="Enter Name" v-model="lead.name" id="name" tabindex="1">
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" class="form-control" placeholder="Enter phone" v-model="lead.phone" id="phone" tabindex="3">
            </div>
            <div class="form-group">
              <label for="package">Interested package</label>
              <input type="text" class="form-control" placeholder="Enter package" v-model="lead.package" id="package" tabindex="5">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="text" class="form-control" placeholder="Enter email" v-model="lead.email" id="email" tabindex="2">
            </div>
            <div class="form-group">
              <label for="dob">Birthday</label>
              <input type="date" class="form-control" placeholder="Enter dob" v-model="lead.dob" id="dob" tabindex="4">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"><button class="btn btn-success">Save</button></div>
        </div>
      </form>
    </div>
  </base-layout>
</template>

<script>
import BaseLayout from '../../Shared/BaseLayout'

export default {
  name: 'LeadAdd',
  components: {
    BaseLayout,
  },

  data() {
    return {
      lead: {
        name: '',
        email: '',
        phone: '',
        dob: '',
        package: '',
      },
    }
  },

  methods: {
    async handleSubmit() {
      let response = await this.$inertia.post('/leads/save', this.lead);
    },
  }
}
</script>
