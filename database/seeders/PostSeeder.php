<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        DB::table('posts')->insert([
            'title' => "الذكاء الاصطناعي.. أبهى صور التفاعل بين البشر والتكنولوجيا",
            'body' => "في عصر التقنية الراهن يشهد عالمنا تحولات هائلة في مجال الذكاء الاصطناعي، ويعكس هذا التطور السريع تحولا ثوريا في كيفية تفاعلنا مع التكنولوجيا، وكيف تلعب التقنية الناشئة دورا حيويا في شتى جوانب حياتنا.

            وفتحت هذه التقنية الأبواب أمام إمكانيات لم نكن نحلم بها من قبل، حيث أصبح لدينا القدرة على تحسين الإنتاجية وتطوير حياتنا بشكل جذري.
            
            ويعزز الذكاء الاصطناعي التفاعل بين البشر والتكنولوجيا بطرق متعددة، من الاستخدامات الصناعية إلى الخدمات اليومية.
            
            وصاغ عالم الحاسوب الأميركي  مصطلح الذكاء الاصطناعي للمرة الأولى في خطاب ألقاه في المؤتمر الدولي الثاني عن الآلات الذكية في عام 1955، حيث عرّفه بأنه فرع من علم الحاسوب مهتم بإنشاء آلات ذكية، أي آلات يمكنها أداء المهام التي تتطلب الذكاء البشري.
            
            وترجع جذور الذكاء الاصطناعي بصفته مجالا للدراسة إلى الأيام الأولى للحوسبة، إذ إنه فرع من علوم الحاسوب يتعامل مع إنشاء وكلاء أذكياء، وهي أنظمة يمكنها التفكير والتعلم والتصرف بشكل مستقل.
            
            وتتناول أبحاث الذكاء الاصطناعي مسألة كيفية إنشاء أجهزة حاسوب قادرة على اتباع سلوك ذكي.
            
            ولدى الذكاء الاصطناعي في الوقت الحالي عدد من الاستخدامات ضمن العديد من المجالات المختلفة، مثل التعرف على الصور والتعرف على الصوت ومعالجة اللغة الطبيعية.
            
            كما يساعد الذكاء الاصطناعي في تشخيص الأمراض في وقت مبكر، وتخطيط المدن بشكل أفضل، وإدارة مواردنا بشكل أكثر كفاءة.
            
            ويعود التاريخ الحديث لتطوير الذكاء الاصطناعي إلى منتصف القرن العشرين، حيث بدأ علماء الحاسوب في ابتكار خوارزميات قادرة على إنجاز المهام التي تحتاج عادة إلى ذكاء بشري، مثل حل المشكلات أو التعرف على الأنماط.
            
            وتأسس مجال أبحاث الذكاء الاصطناعي ضمن ورشة عمل في حرم كلية دارتموث خلال صيف عام 1956، ويعتبر "  ,
            'user_id' => 2,
            'category_id' => 2,
            'created_at' =>'2022-01-04 05:08:00'
        ]);

        DB::table('posts')->insert([
            'title' => "الذكاء الاصطناعي.. أبهى صور التفاعل بين البشر والتكنولوجيا",
            'body' => "في عصر التقنية الراهن يشهد عالمنا تحولات هائلة في مجال الذكاء الاصطناعي، ويعكس هذا التطور السريع تحولا ثوريا في كيفية تفاعلنا مع التكنولوجيا، وكيف تلعب التقنية الناشئة دورا حيويا في شتى جوانب حياتنا.

            وفتحت هذه التقنية الأبواب أمام إمكانيات لم نكن نحلم بها من قبل، حيث أصبح لدينا القدرة على تحسين الإنتاجية وتطوير حياتنا بشكل جذري.
            
            ويعزز الذكاء الاصطناعي التفاعل بين البشر والتكنولوجيا بطرق متعددة، من الاستخدامات الصناعية إلى الخدمات اليومية.
            
            وصاغ عالم الحاسوب الأميركي  مصطلح الذكاء الاصطناعي للمرة الأولى في خطاب ألقاه في المؤتمر الدولي الثاني عن الآلات الذكية في عام 1955، حيث عرّفه بأنه فرع من علم الحاسوب مهتم بإنشاء آلات ذكية، أي آلات يمكنها أداء المهام التي تتطلب الذكاء البشري.
            
            وترجع جذور الذكاء الاصطناعي بصفته مجالا للدراسة إلى الأيام الأولى للحوسبة، إذ إنه فرع من علوم الحاسوب يتعامل مع إنشاء وكلاء أذكياء، وهي أنظمة يمكنها التفكير والتعلم والتصرف بشكل مستقل.
            
            وتتناول أبحاث الذكاء الاصطناعي مسألة كيفية إنشاء أجهزة حاسوب قادرة على اتباع سلوك ذكي.
            
            ولدى الذكاء الاصطناعي في الوقت الحالي عدد من الاستخدامات ضمن العديد من المجالات المختلفة، مثل التعرف على الصور والتعرف على الصوت ومعالجة اللغة الطبيعية.
            
            كما يساعد الذكاء الاصطناعي في تشخيص الأمراض في وقت مبكر، وتخطيط المدن بشكل أفضل، وإدارة مواردنا بشكل أكثر كفاءة.
            
            ويعود التاريخ الحديث لتطوير الذكاء الاصطناعي إلى منتصف القرن العشرين، حيث بدأ علماء الحاسوب في ابتكار خوارزميات قادرة على إنجاز المهام التي تحتاج عادة إلى ذكاء بشري، مثل حل المشكلات أو التعرف على الأنماط.
            
            وتأسس مجال أبحاث الذكاء الاصطناعي ضمن ورشة عمل في حرم كلية دارتموث خلال صيف عام 1956، ويعتبر "  ,
           
            'user_id' => 1,
            'category_id' => 1,
            'created_at' =>'2022-01-04 05:08:00'
        ]);

        DB::table('posts')->insert([
            'title' => "الذكاء الاصطناعي.. أبهى صور التفاعل بين البشر والتكنولوجيا",
            'body' => "في عصر التقنية الراهن يشهد عالمنا تحولات هائلة في مجال الذكاء الاصطناعي، ويعكس هذا التطور السريع تحولا ثوريا في كيفية تفاعلنا مع التكنولوجيا، وكيف تلعب التقنية الناشئة دورا حيويا في شتى جوانب حياتنا.

            وفتحت هذه التقنية الأبواب أمام إمكانيات لم نكن نحلم بها من قبل، حيث أصبح لدينا القدرة على تحسين الإنتاجية وتطوير حياتنا بشكل جذري.
            
            ويعزز الذكاء الاصطناعي التفاعل بين البشر والتكنولوجيا بطرق متعددة، من الاستخدامات الصناعية إلى الخدمات اليومية.
            
            وصاغ عالم الحاسوب الأميركي  مصطلح الذكاء الاصطناعي للمرة الأولى في خطاب ألقاه في المؤتمر الدولي الثاني عن الآلات الذكية في عام 1955، حيث عرّفه بأنه فرع من علم الحاسوب مهتم بإنشاء آلات ذكية، أي آلات يمكنها أداء المهام التي تتطلب الذكاء البشري.
            
            وترجع جذور الذكاء الاصطناعي بصفته مجالا للدراسة إلى الأيام الأولى للحوسبة، إذ إنه فرع من علوم الحاسوب يتعامل مع إنشاء وكلاء أذكياء، وهي أنظمة يمكنها التفكير والتعلم والتصرف بشكل مستقل.
            
            وتتناول أبحاث الذكاء الاصطناعي مسألة كيفية إنشاء أجهزة حاسوب قادرة على اتباع سلوك ذكي.
            
            ولدى الذكاء الاصطناعي في الوقت الحالي عدد من الاستخدامات ضمن العديد من المجالات المختلفة، مثل التعرف على الصور والتعرف على الصوت ومعالجة اللغة الطبيعية.
            
            كما يساعد الذكاء الاصطناعي في تشخيص الأمراض في وقت مبكر، وتخطيط المدن بشكل أفضل، وإدارة مواردنا بشكل أكثر كفاءة.
            
            ويعود التاريخ الحديث لتطوير الذكاء الاصطناعي إلى منتصف القرن العشرين، حيث بدأ علماء الحاسوب في ابتكار خوارزميات قادرة على إنجاز المهام التي تحتاج عادة إلى ذكاء بشري، مثل حل المشكلات أو التعرف على الأنماط.
            
            وتأسس مجال أبحاث الذكاء الاصطناعي ضمن ورشة عمل في حرم كلية دارتموث خلال صيف عام 1956، ويعتبر "  ,
            'user_id' => 1,
            'category_id' => 2,
            'created_at' =>'2022-01-04 05:08:00'
        ]);

        DB::table('posts')->insert([
            'title' => "الذكاء الاصطناعي.. أبهى صور التفاعل بين البشر والتكنولوجيا",
            'body' => "في عصر التقنية الراهن يشهد عالمنا تحولات هائلة في مجال الذكاء الاصطناعي، ويعكس هذا التطور السريع تحولا ثوريا في كيفية تفاعلنا مع التكنولوجيا، وكيف تلعب التقنية الناشئة دورا حيويا في شتى جوانب حياتنا.

            وفتحت هذه التقنية الأبواب أمام إمكانيات لم نكن نحلم بها من قبل، حيث أصبح لدينا القدرة على تحسين الإنتاجية وتطوير حياتنا بشكل جذري.
            
            ويعزز الذكاء الاصطناعي التفاعل بين البشر والتكنولوجيا بطرق متعددة، من الاستخدامات الصناعية إلى الخدمات اليومية.
            
            وصاغ عالم الحاسوب الأميركي  مصطلح الذكاء الاصطناعي للمرة الأولى في خطاب ألقاه في المؤتمر الدولي الثاني عن الآلات الذكية في عام 1955، حيث عرّفه بأنه فرع من علم الحاسوب مهتم بإنشاء آلات ذكية، أي آلات يمكنها أداء المهام التي تتطلب الذكاء البشري.
            
            وترجع جذور الذكاء الاصطناعي بصفته مجالا للدراسة إلى الأيام الأولى للحوسبة، إذ إنه فرع من علوم الحاسوب يتعامل مع إنشاء وكلاء أذكياء، وهي أنظمة يمكنها التفكير والتعلم والتصرف بشكل مستقل.
            
            وتتناول أبحاث الذكاء الاصطناعي مسألة كيفية إنشاء أجهزة حاسوب قادرة على اتباع سلوك ذكي.
            
            ولدى الذكاء الاصطناعي في الوقت الحالي عدد من الاستخدامات ضمن العديد من المجالات المختلفة، مثل التعرف على الصور والتعرف على الصوت ومعالجة اللغة الطبيعية.
            
            كما يساعد الذكاء الاصطناعي في تشخيص الأمراض في وقت مبكر، وتخطيط المدن بشكل أفضل، وإدارة مواردنا بشكل أكثر كفاءة.
            
            ويعود التاريخ الحديث لتطوير الذكاء الاصطناعي إلى منتصف القرن العشرين، حيث بدأ علماء الحاسوب في ابتكار خوارزميات قادرة على إنجاز المهام التي تحتاج عادة إلى ذكاء بشري، مثل حل المشكلات أو التعرف على الأنماط.
            
            وتأسس مجال أبحاث الذكاء الاصطناعي ضمن ورشة عمل في حرم كلية دارتموث خلال صيف عام 1956، ويعتبر "  ,
            'user_id' => 3,
            'category_id' => 3,
            'created_at' =>'2022-01-04 05:08:00'
        ]);

        DB::table('posts')->insert([
            'title' => "الذكاء الاصطناعي.. أبهى صور التفاعل بين البشر والتكنولوجيا",
            'body' => "في عصر التقنية الراهن يشهد عالمنا تحولات هائلة في مجال الذكاء الاصطناعي، ويعكس هذا التطور السريع تحولا ثوريا في كيفية تفاعلنا مع التكنولوجيا، وكيف تلعب التقنية الناشئة دورا حيويا في شتى جوانب حياتنا.

            وفتحت هذه التقنية الأبواب أمام إمكانيات لم نكن نحلم بها من قبل، حيث أصبح لدينا القدرة على تحسين الإنتاجية وتطوير حياتنا بشكل جذري.
            
            ويعزز الذكاء الاصطناعي التفاعل بين البشر والتكنولوجيا بطرق متعددة، من الاستخدامات الصناعية إلى الخدمات اليومية.
            
            وصاغ عالم الحاسوب الأميركي  مصطلح الذكاء الاصطناعي للمرة الأولى في خطاب ألقاه في المؤتمر الدولي الثاني عن الآلات الذكية في عام 1955، حيث عرّفه بأنه فرع من علم الحاسوب مهتم بإنشاء آلات ذكية، أي آلات يمكنها أداء المهام التي تتطلب الذكاء البشري.
            
            وترجع جذور الذكاء الاصطناعي بصفته مجالا للدراسة إلى الأيام الأولى للحوسبة، إذ إنه فرع من علوم الحاسوب يتعامل مع إنشاء وكلاء أذكياء، وهي أنظمة يمكنها التفكير والتعلم والتصرف بشكل مستقل.
            
            وتتناول أبحاث الذكاء الاصطناعي مسألة كيفية إنشاء أجهزة حاسوب قادرة على اتباع سلوك ذكي.
            
            ولدى الذكاء الاصطناعي في الوقت الحالي عدد من الاستخدامات ضمن العديد من المجالات المختلفة، مثل التعرف على الصور والتعرف على الصوت ومعالجة اللغة الطبيعية.
            
            كما يساعد الذكاء الاصطناعي في تشخيص الأمراض في وقت مبكر، وتخطيط المدن بشكل أفضل، وإدارة مواردنا بشكل أكثر كفاءة.
            
            ويعود التاريخ الحديث لتطوير الذكاء الاصطناعي إلى منتصف القرن العشرين، حيث بدأ علماء الحاسوب في ابتكار خوارزميات قادرة على إنجاز المهام التي تحتاج عادة إلى ذكاء بشري، مثل حل المشكلات أو التعرف على الأنماط.
            
            وتأسس مجال أبحاث الذكاء الاصطناعي ضمن ورشة عمل في حرم كلية دارتموث خلال صيف عام 1956، ويعتبر "  ,
            'user_id' => 4,
            'category_id' => 4,
            'created_at' =>'2022-01-04 05:08:00'
        ]);

        DB::table('posts')->insert([
            'title' => "الذكاء الاصطناعي.. أبهى صور التفاعل بين البشر والتكنولوجيا",
            'body' => "في عصر التقنية الراهن يشهد عالمنا تحولات هائلة في مجال الذكاء الاصطناعي، ويعكس هذا التطور السريع تحولا ثوريا في كيفية تفاعلنا مع التكنولوجيا، وكيف تلعب التقنية الناشئة دورا حيويا في شتى جوانب حياتنا.

            وفتحت هذه التقنية الأبواب أمام إمكانيات لم نكن نحلم بها من قبل، حيث أصبح لدينا القدرة على تحسين الإنتاجية وتطوير حياتنا بشكل جذري.
            
            ويعزز الذكاء الاصطناعي التفاعل بين البشر والتكنولوجيا بطرق متعددة، من الاستخدامات الصناعية إلى الخدمات اليومية.
            
            وصاغ عالم الحاسوب الأميركي  مصطلح الذكاء الاصطناعي للمرة الأولى في خطاب ألقاه في المؤتمر الدولي الثاني عن الآلات الذكية في عام 1955، حيث عرّفه بأنه فرع من علم الحاسوب مهتم بإنشاء آلات ذكية، أي آلات يمكنها أداء المهام التي تتطلب الذكاء البشري.
            
            وترجع جذور الذكاء الاصطناعي بصفته مجالا للدراسة إلى الأيام الأولى للحوسبة، إذ إنه فرع من علوم الحاسوب يتعامل مع إنشاء وكلاء أذكياء، وهي أنظمة يمكنها التفكير والتعلم والتصرف بشكل مستقل.
            
            وتتناول أبحاث الذكاء الاصطناعي مسألة كيفية إنشاء أجهزة حاسوب قادرة على اتباع سلوك ذكي.
            
            ولدى الذكاء الاصطناعي في الوقت الحالي عدد من الاستخدامات ضمن العديد من المجالات المختلفة، مثل التعرف على الصور والتعرف على الصوت ومعالجة اللغة الطبيعية.
            
            كما يساعد الذكاء الاصطناعي في تشخيص الأمراض في وقت مبكر، وتخطيط المدن بشكل أفضل، وإدارة مواردنا بشكل أكثر كفاءة.
            
            ويعود التاريخ الحديث لتطوير الذكاء الاصطناعي إلى منتصف القرن العشرين، حيث بدأ علماء الحاسوب في ابتكار خوارزميات قادرة على إنجاز المهام التي تحتاج عادة إلى ذكاء بشري، مثل حل المشكلات أو التعرف على الأنماط.
            
            وتأسس مجال أبحاث الذكاء الاصطناعي ضمن ورشة عمل في حرم كلية دارتموث خلال صيف عام 1956، ويعتبر "  ,
            'user_id' => 3,
            'category_id' => 3,
            'created_at' =>'2022-01-04 05:08:00'
        ]);

      
    }
}
