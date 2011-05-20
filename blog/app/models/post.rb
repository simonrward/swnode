class Post < ActiveRecord::Base
  validates :name,  :presence => {:message => 'We need your name. It can be a false one...'}
  validates :title, :presence => true,
                    :length => { :minimum => 5 }
              
  has_many :comments, :dependent => :destroy
end
