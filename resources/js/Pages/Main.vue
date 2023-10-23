<template lang="">
    <div class="bg-zinc-800 w-screen h-screen flex items-center justify-center font-mono">
      <div class="w-1/3">
          <div class="space-y-8">
            <Form/>
            <Ongoing :tasks="tasks"/>
            <Completed :tasks="tasks"/>
          </div>
        </div>
    </div>
</template>

<script>
import Form from './Form.vue';
import Completed from './Completed.vue';
import Ongoing from './Ongoing.vue';

export default {
  props: {
    tasks: Array
  },
  components: {
    Form,Completed,Ongoing
  }
}
</script>
