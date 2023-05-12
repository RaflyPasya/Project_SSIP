<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->

      <base href="/public">

      @include('home.homecss')

      <style type="text/css">
         body
         {
            background-color: darkslategray;
         }

         label
         {
            font-size: 15px;
            font-weight: bold;
            color: whitesmoke;
            padding: 20px;
         }

         .post_deg
         {
            text-align: center;
         }

         .img_deg
         {
            height: 150px;
            width: 250px;
            margin: auto;
         }

         .title_deg
         {
            padding: 30px;
            font-size: 30px;
            font-weight: bold;
            color: whitesmoke;
         }


      </style>
      
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         
         @include('home.header')

         <div class="post_deg">

            @if(session()->has('message'))

         <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

            {{session()->get('message')}}

         </div>

         @endif

            <h1 class="title_deg">Update Post</h1>
            <form action="{{url('update_post_data', $data->id)}}" method="POST" enctype="multipart/form-data">

               @csrf

               <div>
                  <label>Title</label>
                  <input type="text" name="title" value="{{$data->title}}">
               </div>

               <div>
                  <label>Description</label>
                  <textarea name="description">{{$data->description}}</textarea>
               </div>

               <div>
                  <label>Current Image</label>
                  <img class="img_deg" src="/postimage/{{$data->image}}">
               </div>

               <div>
                  <label>Change Current Image</label>
                  <input type="file" name="image">
               </div>

               <div>
                  <input type="submit" class="btn btn-outline-secondary" value="Update">
               </div>

            </form>



         </div>

      </div>
      
      @include('home.footer')

   </body>
</html>