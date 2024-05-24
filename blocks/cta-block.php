
  <div class="cta-block">
      

        
      <div class="content">
          
        <h3>
        <?php the_field('cta_title');?>
        </h3>
        <p> <?php the_field('cta_content');?></p>
      
      </div>
    
      <div class="buttons-wrapper"> 
          <span class="align-middle">
        <a href="<?php the_field('button_link');?>" id="<?php the_field('button_id'); ?>" class="btn-mayecreate   yellow-border">
        <?php the_field('button_text');?>
        </a> 
          
      </div>
    
  
  </div>


    
<style>
.buttons-wrapper {
    width: 40%;
    text-align: right;
    display: flex;
    justify-content: flex-end;
}
    
    a.btn-mayecreate.yellow-border {
    border: 2px solid #f5b712;
    background-color: transparent;
    background-image: none;
}
    a.btn-mayecreate.yellow-border:hover {
      background-color: #f5b712;  
    }
        
.content p {
    margin-bottom: 0px;
}
.content {
    width: 80%;
}
    
    .content h3 {
    color: white !important;
}
        
.buttons-wrapper a.btn-mayecreate.yellow-border {
    margin: 0px;
}
    
    
@media only screen and (max-width: 970px) { 
.cta-block {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    padding: 30px;
}
    
.buttons-wrapper {
    width: 100%;
    text-align: left;
    display: flex;
    justify-content: flex-start;
    margin-top: 30px;
}
    
    .content {
    width: 100%;
}
    

    
}

    </style>
