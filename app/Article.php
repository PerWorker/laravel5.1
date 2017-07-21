<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
      protected $fillable=['title','content','author','published_at','user_id'];
	  protected $dates = ['published_at'];//自动将该变量作为Carbon处理
	  
	  public function setPublishedAtAttribute($date){
	  	
	      $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
	  }
	  
	  public function scopePublished($query){
			
		 $query->where('published_at','<=',Carbon::now());
	  }
	  public function user(){
	      return $this->belongsTo('App\User');
	  }
}
