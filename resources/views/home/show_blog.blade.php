<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->

      @include('home.homecss')
      

      <style type="text/css">
         body
         {
            background-color: darkslategray;
         }

         .container,
         .container h1,h4,p {
            color: white;
         }




      </style>



   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         
         @include('home.header')


         <div class="container">
            <h1 class="services_taital">Blog Posts </h1>
            <div class="services_section_2">
               <div class="row">

                  @foreach($post as $post)

                  <div class="col-md-4">
                     <div><img style="margin-bottom: 20px; height: 200px; padding: 20px" width="350px" src="/postimage/{{$post->image}}" class="services_img"></div>

                     <h4>{{$post->title}}</h4>

                     <p>Post by <b>{{$post->name}}</b></p>

                     <div class="btn_main"><a href="{{url('post_details', $post->id)}}">Read More</a></div>
                  </div>

                  @endforeach
                  
               </div>
            </div>
         </div>



      <!-- footer section start -->
      
      @include('home.footer')

   </body>
</html>