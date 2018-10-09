new Vue({
    el: '#app',

    data: {
        name: '',
        file: {},
        url: '',
        images: []

    },

    computed: {
    },

    mounted() {
        this.loadData();
    },


    methods: {

        fileChanged(sender){
            this.file = sender.target.files[0];
        },

        send(){
            let formData = new FormData ();
            let config = {
                 headers: {
                    'Content-Type': 'multipart/form-data'
                }
            };

            formData.append ('name', this.name);
            formData.append ('file', this.file, this.file.name);

            axios.post ('/image', formData, config)
                .then(res => this.url = res.data,
                      err => alert(err.message));
        },

        loadData (){
            //let url = '{{ route('image.index') }}';
            // let data = {
            //     url: document.images.pageUrls.image_index,
            // };
            axios.get('/image')
                 .then (res => this.images = res.data);
        },

        /**
         * Delete image
         *
         * @param      {<type>}  image  The image
         */
        deleteImage(image){
            //let url = '{{ route('image.destroy', '') }}/' + image.id;
            // let data = {
            //     url: document.images.pageUrls.image_delete,
            // };

            axios.delete ('/image/', image.id)
                 .then (res => alert ('deleted'));
        }
    }
})
