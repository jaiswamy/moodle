<?php

class __Mustache_32965de41cefdfd7326b3368691ce5f7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('tagscount');
        $buffer .= $this->section9ee916372f1cdf60339e37fd73c43030($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section33e66d938e28bd0bf1fbb26c634e4d20($context, $indent, $value);

        return $buffer;
    }

    private function sectionFd79f01855c9e64033de5132b245f263(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' class="accesshide"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' class="accesshide"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section719cf7c3e367fe15af7a86317c30f07a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <b{{#accesshidelabel}} class="accesshide"{{/accesshidelabel}}>{{label}}:</b>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <b';
                $value = $context->find('accesshidelabel');
                $buffer .= $this->sectionFd79f01855c9e64033de5132b245f263($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ':</b>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC97881a730b88ac5af39b988a93d9309(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="overlimit"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'class="overlimit"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35cd54248ef1a2a54527fd6114b87692(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'standardtag';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'standardtag';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC61238b517eb852bc32204d2302eb1cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="flagged-tag">{{name}}</span></a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <span class="flagged-tag">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA15b07409385774c9c801977aac70635(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li {{#overlimit}}class="overlimit"{{/overlimit}}>
                <a href="{{viewurl}}" class="badge bg-info text-white {{#isstandard}}standardtag{{/isstandard}}" >
                {{#flag}}
                    <span class="flagged-tag">{{name}}</span></a>
                {{/flag}}
                {{^flag}}
                    {{name}}</a>
                {{/flag}}
            </li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li ';
                $value = $context->find('overlimit');
                $buffer .= $this->sectionC97881a730b88ac5af39b988a93d9309($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="badge bg-info text-white ';
                $value = $context->find('isstandard');
                $buffer .= $this->section35cd54248ef1a2a54527fd6114b87692($context, $indent, $value);
                $buffer .= '" >
';
                $value = $context->find('flag');
                $buffer .= $this->sectionC61238b517eb852bc32204d2302eb1cd($context, $indent, $value);
                $value = $context->find('flag');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    ';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</a>
';
                }
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88b25ad7fde04eac92bb3043d7e6ed40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'moretags, core_tag';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'moretags, core_tag';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c41e879729f0a186e15bde6fbb7ab5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'lesstags, core_tag';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'lesstags, core_tag';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40e9b5dae5b1aca71f88038434c2e0a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="visibleifjs">
                <a href="#" class="tagmorelink">{{#str}}moretags, core_tag{{/str}}</a>
            </li>
            <li class="visibleifjs">
                <a href="#" class="taglesslink">{{#str}}lesstags, core_tag{{/str}}</a>
            </li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li class="visibleifjs">
';
                $buffer .= $indent . '                <a href="#" class="tagmorelink">';
                $value = $context->find('str');
                $buffer .= $this->section88b25ad7fde04eac92bb3043d7e6ed40($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </li>
';
                $buffer .= $indent . '            <li class="visibleifjs">
';
                $buffer .= $indent . '                <a href="#" class="taglesslink">';
                $value = $context->find('str');
                $buffer .= $this->section5c41e879729f0a186e15bde6fbb7ab5d($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9ee916372f1cdf60339e37fd73c43030(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="tag_list hideoverlimit {{classes}}">
    {{#label}}
        <b{{#accesshidelabel}} class="accesshide"{{/accesshidelabel}}>{{label}}:</b>
    {{/label}}
    <ul class="inline-list">
        {{#tags}}
            <li {{#overlimit}}class="overlimit"{{/overlimit}}>
                <a href="{{viewurl}}" class="badge bg-info text-white {{#isstandard}}standardtag{{/isstandard}}" >
                {{#flag}}
                    <span class="flagged-tag">{{name}}</span></a>
                {{/flag}}
                {{^flag}}
                    {{name}}</a>
                {{/flag}}
            </li>
        {{/tags}}
        {{#overflow}}
            <li class="visibleifjs">
                <a href="#" class="tagmorelink">{{#str}}moretags, core_tag{{/str}}</a>
            </li>
            <li class="visibleifjs">
                <a href="#" class="taglesslink">{{#str}}lesstags, core_tag{{/str}}</a>
            </li>
        {{/overflow}}
    </ul>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="tag_list hideoverlimit ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('label');
                $buffer .= $this->section719cf7c3e367fe15af7a86317c30f07a($context, $indent, $value);
                $buffer .= $indent . '    <ul class="inline-list">
';
                $value = $context->find('tags');
                $buffer .= $this->sectionA15b07409385774c9c801977aac70635($context, $indent, $value);
                $value = $context->find('overflow');
                $buffer .= $this->section40e9b5dae5b1aca71f88038434c2e0a5($context, $indent, $value);
                $buffer .= $indent . '    </ul>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33e66d938e28bd0bf1fbb26c634e4d20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\'], function($) {
    $(\'.tag_list .tagmorelink\').click(function(e) {
        e.preventDefault();
        $(this).closest(\'.tag_list\').removeClass(\'hideoverlimit\');
    });
    $(\'.tag_list .taglesslink\').click(function(e) {
        e.preventDefault();
        $(this).closest(\'.tag_list\').addClass(\'hideoverlimit\');
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\'], function($) {
';
                $buffer .= $indent . '    $(\'.tag_list .tagmorelink\').click(function(e) {
';
                $buffer .= $indent . '        e.preventDefault();
';
                $buffer .= $indent . '        $(this).closest(\'.tag_list\').removeClass(\'hideoverlimit\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    $(\'.tag_list .taglesslink\').click(function(e) {
';
                $buffer .= $indent . '        e.preventDefault();
';
                $buffer .= $indent . '        $(this).closest(\'.tag_list\').addClass(\'hideoverlimit\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
