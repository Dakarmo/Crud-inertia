<script setup>
    defineProps ({
        users: Object,
    })
</script>

<template>

  
  <div class="mt-11" >
<button class=" flex justify-end bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
  Add User
</button>
</div>
    <div class="flex flex-col max-w-7xl m-auto">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-left text-sm font-light">
          <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
              <th scope="col" class="px-6 py-4"></th>
              <th scope="col" class="px-6 py-4">Name</th>
              <th scope="col" class="px-6 py-4">Email</th>
              <th scope="col" class="px-6 py-4">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="user in users" :key="user.id" :user="user" class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
              <td class="whitespace-nowrap px-6 py-4 font-medium">{{user.id}}</td>
              <td class="whitespace-nowrap px-6 py-4">{{user.name}}</td>
              <td class="whitespace-nowrap px-6 py-4">{{user.email}}</td>
              <td class="whitespace-nowrap px-6 py-4">
                <a href="" class="bg-blue-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">Edit</a>
                <a href="" class="bg-red-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">Delete</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</template>


