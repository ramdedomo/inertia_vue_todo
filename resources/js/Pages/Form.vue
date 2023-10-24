<template lang="">
        <form @submit.prevent="submit">
            <textarea v-model="task" class=" ease-in-out transition-all duration-300 bg-zinc-700 rounded-md w-full caret-inherit px-3 py-2 placeholder:text-zinc-500  placeholder:italic text-white focus:bg-zinc-900" name="" id="" placeholder="Pack Lunch, Grocery shopping, etc."></textarea>
            <div class="flex gap-2 justify-between">
                <div class="flex gap-2">
                   <input type="checkbox" name="isdone" v-model="isDone" id="isdone">
                   <label for="isdone" class="text-white">Completed</label>
                </div>
                <div class="flex gap-2 justify-end">
                    <button @click="()=>{this.task = '';}" type="button" class="bg-zinc-300 rounded-md px-2 hover:bg-zinc-900 hover:text-white ease-in-out transition-all duration-300">Clear</button>
                     <button class="bg-zinc-300 rounded-md px-2 hover:bg-zinc-900 hover:text-white ease-in-out transition-all  duration-300">Add</button>
                </div>

            </div>
        </form>
</template>

<script>
import { router } from '@inertiajs/vue3'

export default {
    data() {
        return {
            task: 'Pack Lunch, Grocery shopping, etc.',
            isDone: true
        }
    },
    methods: {
        submit() {
            router.post(`/create`, { task: this.task, isDone: this.isDone })
        }
    }
}
</script>

<style lang="">
    
</style>