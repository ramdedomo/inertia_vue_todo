<template lang="">
       <div>
              <div class="relative">
                <hr class="my-4">
                <span class="absolute text-white -top-3 bg-zinc-800 pr-3">
                  Completed
                </span>
              </div>
               
              <div v-if="!doneTasks.length" class="text-center bg-zinc-700 rounded-md text-zinc-500 py-2 bg-opacity-20">
                Empty
              </div>

              <div v-for="task in doneTasks" :key="task.id" class="mb-1">
                <div class="flex justify-between items-center bg-zinc-900 p-2 rounded-md text-white">
                <span>{{task.task}}</span>
                  <div class="flex gap-2">
                    <span @click="()=>{postCompleted(task.id)}" class="hover:bg-amber-500 flex items-center gap-1 bg-zinc-800 h-6 px-2 rounded-md  ease-in-out transition-all duration-100">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                      </svg>
                    </span> 
                    <span @click="()=>{deleteTask(task.id)}" class="hover:bg-red-500 flex items-center gap-1 bg-zinc-800 h-6 px-2 rounded-md  ease-in-out transition-all duration-100">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                      </svg>
                    </span> 
                  </div>

  
                </div>
              </div>



            </div>
</template>
<script>
import { router } from '@inertiajs/vue3'

export default {
  methods: {
    postCompleted(id){
      router.post(`/update/${id}`)
    },
    deleteTask(id){
      router.post(`/destroy/${id}`)
    }
  },
  props: {
    tasks: Array
  },
  computed: {
    doneTasks() {
      return this.tasks.filter(data => {
        return data.isDone;
      })
    }
  }
}
</script>
<style lang="">
    
</style>