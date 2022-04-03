import $ from 'jquery'

wp.customize('_themename__site_info', (value) =>{
    value.bind((to)=>{
        
        $('.c-site__info__text').html(to)
    })
})