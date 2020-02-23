<template>
  <base-layout>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>leads</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>DOB</th>
                <th>Package</th>
                <th>Added On</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="lead in leads" :key="lead.id">
                <td>{{ lead.id }}</td>
                <td>{{ lead.name }}</td>
                <td>{{ lead.email }}</td>
                <td>{{ lead.phone }}</td>
                <td>{{ lead.dob }}</td>
                <td>{{ lead.interested_package }}</td>
                <td>{{ lead.created_at }}</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </base-layout>
</template>

<script>
import BaseLayout from '../../Shared/BaseLayout'

export default {
  name: 'Index',
  components: {
    BaseLayout,
  },
  props: ['leads'],
}
</script>
