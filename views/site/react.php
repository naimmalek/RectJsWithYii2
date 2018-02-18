<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'React';
?>

<!-- <script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.24.0/babel.js"></script> -->

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <!-- ReactJs         -->
    </p>
    <div id="root"></div>
</div>

<script type='text/jsx'>

const element = (
      <div>
        <h1>Hello, world!</h1>
        <h2>It is {new Date().toLocaleTimeString()}.</h2>
      </div>
    );

ReactDOM.render(
    element,
    document.getElementById('root')
);



// ReactDOM.render(
//   <h1>Hello, world!</h1>,
//   document.getElementById('root')
// );
</script>