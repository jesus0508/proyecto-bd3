<template>
<div class="card my-3">
  <div class="card-header">
    <div class="d-flex align-items-center">
      <img src="https://picsum.photos/50/50" width="45" class="rounded-circle mr-2" alt="photo" >
      <div class="ml-2">
        <h5 v-text="post.autor" class="m-0"></h5>
        <small v-text="post.created_at" class="text-muted"></small>
      </div>
    </div>
  </div>
  <div class="card-body">
    <p v-text="post.contenido" class="card-text"></p>
  </div>
  <div class="card-footer text-muted py-1">
    <ul class="list-group list-group-horizontal justify-content-end">
      <a href="" class="list-group-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
        </svg>
        <small>45</small>
      </a> 
      <a href="" class="list-group-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
        </svg>
        <small>10</small>
      </a>
    </ul>
  </div>
</div>
</template>

<script>
export default {
  props: {
    post: {
        type: Object,
        required: true
    },
  }
}
</script>


