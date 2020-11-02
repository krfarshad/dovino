<?php /*Template Name:WhiteBG */ ?>
<?php get_header(); ?>
<div class="page ">
    <style>
        .white-bg {
            background-color:#fff;
            padding:17px;
            border-radius:5px;
            width:1180px;
            
        }
        @media screen and (max-width:1180px){
            .white-bg {
            width:95%;
        }
        }
        .white-bg h1,.white-bg h2,.white-bg h3,.white-bg h4,.white-bg h5,.white-bg h6{
            display:block;
            width:100%;
            padding:10px 0 10px 0;
            margin:20px 0 10px 0;
        }
        .white-bg h1,.white-bg h2,.white-bg h3,.white-bg h4,.white-bg h5,.white-bg h6,.white-bg p,.white-bg span{
            color:#0008;
            
        }
        .white-bg h1,.white-bg h2,.white-bg h3,.white-bg h4,.white-bg h5{
            border-top:1px solid #eee;
            border-bottom:1px solid #eee;
            
        }
        .white-bg-title h4{
            font-size:20px;
            color:#0009;
            border:3px solid #6fd1ff;
            padding:10px;
            display:table;
            width:auto;
            color: #0009;
            font-weight:700;
            border-radius:5px;
        }
        .white-bg p{
            display:block;
            width:100%;
        }

        .white-bg ul li {
            color:#0008;
            padding:7px ;
            font-size:13px;
            line-height:30px;
        }

    </style>
    <div class="container white-bg" >
    <div class="white-bg-title"> <h4><?php echo get_the_title(); ?></h4></div>
        <div class="row" >
      
        <?php the_content(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
