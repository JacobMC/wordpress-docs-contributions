###Example Text Widget

To start building the text widget from the example above, we build a class that extends the WP_Widget class. In the class constructor we call the parent constructor and pass in our widget's Base ID ('my-text') and the widget's name ('My Text'). After calling the parent class' constructor, we add the code to register our widget to the 'widgets_init' action. 

Next we move on to creating our class properties and methods. First we will create our $args property, which is an array of arguments. For a full list of available arguments, see (insert link). We are just going to use the 'before_title', 'after_title', 'before_widget', and 'after_widget' arguments and set them to the appropriate HTML wrappers. These arguments determine the code that is output before and after the title and the widget, as the names of the arguments suggest.

Next we will define our widget() function. This function will have two parameters: 
- $args - an array of arguments, which we have already defined.
- $instance - the instance of the widget
First we will echo our 'before_widget' value. Then we check to see if we have a title, if we do, then we echo the values of 'before_title', the title with 'widget_title' filters applied, and 'after_title'.
Next we echo our 'textwidget' wrapper and our 

--

To build the text widget from the example at the beginning of this article. You will start by setting up a widget class that extends the WP_Widget class.

In the class constructor you will call the parent constructor and pass it your widget's base ID and name. Also in the class constructor you will hook into the 'widgets_init' action to register your widget.

Next you will declare the arguments you will use when creating your widget. There are four arguments you must define, 'before_title', 'after_title', 'before_widget', and 'after_widget'. These arguments will define the code that wraps your widgets title and the widget itself.

After defining your arguments, you will define the widgets function. This is the function that will process options from the form and display the HTML for the widget on the front-end of your site. In the example above the widget function simply outputs the widget title, while passing it through the `widget_title` filter. It then out puts a simple widget wrapper and the content of the widget's text field. As outlined in the example, you can access the options from the widget that are stored in the `$instance`.

