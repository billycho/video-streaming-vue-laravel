<template>
<!-- <div key={index} className="item-row">
                <a href="/view">
                    <img src="fff.png" alt="1" />
                </a>
            </div> -->
    <div class="container">
        <div v-for="video in videos" :key="video.id" class="item-row">
            <a href="/watch">
                    <img src="fff.png" alt="1" /><br>
                    <div>{{video.title}}</div>
            </a>
            <!-- <div>{{ video.id }}</div> -->
        </div>
    </div>
   

    <!-- <div>
        <h3 class="text-center">All Videos</h3><br/>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Author</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="video in videos" :key="video.id">
                <td>{{ video.id }}</td>
                <td>{{ video.title }}</td>
                <td>{{ video.file_url }}</td>
                <td>{{ video.description }}</td>
            </tr>
            </tbody>
        </table>
    </div> -->
</template>

<script>
    export default {
        data() {
            return {
                videos: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/videos')
                .then(response => {
                    this.videos = response.data;
                });
        },
        methods: {
        }
    }
</script>