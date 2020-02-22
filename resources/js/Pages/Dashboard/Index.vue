<template>
  <base-layout>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>This is dashboard</h1>
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
  props: ['fname', 'lname'],
}
</script>
