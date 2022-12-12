<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\StaticAnalysis;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use PhpParser\Node;
use PhpParser\Node\Expr\Array_;
use PhpParser\Node\Expr\ArrayDimFetch;
use PhpParser\Node\Expr\ArrayItem;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\BinaryOp;
use PhpParser\Node\Expr\CallLike;
use PhpParser\Node\Expr\Cast;
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
use function array_reverse;
use function range;
use function sort;
use PhpParser\Node;
use PhpParser\Node\Expr\Array_;
use PhpParser\Node\Expr\ArrayDimFetch;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\BinaryOp;
use PhpParser\Node\Expr\CallLike;
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
use PhpParser\Node\Expr\Closure;
use PhpParser\Node\Expr\Match_;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\NullsafePropertyFetch;
<<<<<<< HEAD
use PhpParser\Node\Expr\Print_;
=======
<<<<<<< HEAD
=======
use PhpParser\Node\Expr\Print_;
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
use PhpParser\Node\Expr\PropertyFetch;
use PhpParser\Node\Expr\StaticPropertyFetch;
use PhpParser\Node\Expr\Ternary;
use PhpParser\Node\MatchArm;
use PhpParser\Node\Scalar\Encapsed;
use PhpParser\Node\Stmt\Break_;
use PhpParser\Node\Stmt\Case_;
use PhpParser\Node\Stmt\Catch_;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\ClassMethod;
use PhpParser\Node\Stmt\Continue_;
use PhpParser\Node\Stmt\Do_;
use PhpParser\Node\Stmt\Echo_;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use PhpParser\Node\Stmt\Else_;
use PhpParser\Node\Stmt\ElseIf_;
use PhpParser\Node\Stmt\Expression;
use PhpParser\Node\Stmt\Finally_;
use PhpParser\Node\Stmt\For_;
use PhpParser\Node\Stmt\Foreach_;
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
use PhpParser\Node\Stmt\ElseIf_;
use PhpParser\Node\Stmt\Expression;
use PhpParser\Node\Stmt\For_;
use PhpParser\Node\Stmt\Foreach_;
use PhpParser\Node\Stmt\Function_;
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
use PhpParser\Node\Stmt\Goto_;
use PhpParser\Node\Stmt\If_;
use PhpParser\Node\Stmt\Property;
use PhpParser\Node\Stmt\Return_;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use PhpParser\Node\Stmt\Switch_;
use PhpParser\Node\Stmt\Throw_;
use PhpParser\Node\Stmt\TryCatch;
use PhpParser\Node\Stmt\Unset_;
use PhpParser\Node\Stmt\While_;
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
use PhpParser\Node\Stmt\Throw_;
use PhpParser\Node\Stmt\Unset_;
use PhpParser\Node\Stmt\While_;
use PhpParser\NodeAbstract;
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
use PhpParser\NodeVisitorAbstract;

/**
 * @internal This class is not covered by the backward compatibility promise for phpunit/php-code-coverage
 */
final class ExecutableLinesFindingVisitor extends NodeVisitorAbstract
{
    /**
     * @psalm-var array<int, int>
     */
    private $executableLines = [];

    /**
     * @psalm-var array<int, int>
     */
    private $propertyLines = [];

    /**
<<<<<<< HEAD
     * @psalm-var array<int, Function_|ClassMethod|Return_|Expression|Assign|Array_>
=======
<<<<<<< HEAD
     * @psalm-var array<int, Return_>
=======
     * @psalm-var array<int, Function_|ClassMethod|Return_|Expression|Assign|Array_>
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     */
    private $returns = [];

    public function enterNode(Node $node): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        if (!$node instanceof NodeAbstract) {
            return;
        }

<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        $this->savePropertyLines($node);

        if (!$this->isExecutable($node)) {
            return;
        }

<<<<<<< HEAD
        foreach ($this->getLines($node, false) as $line) {
=======
<<<<<<< HEAD
        foreach ($this->getLines($node) as $line) {
=======
        foreach ($this->getLines($node, false) as $line) {
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
            if (isset($this->propertyLines[$line])) {
                return;
            }

            $this->executableLines[$line] = $line;
        }
    }

<<<<<<< HEAD
    public function afterTraverse(array $nodes): void
=======
<<<<<<< HEAD
    /**
     * @psalm-return array<int, int>
     */
    public function executableLines(): array
=======
    public function afterTraverse(array $nodes): void
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    {
        $this->computeReturns();

        sort($this->executableLines);
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    }

    /**
     * @psalm-return array<int, int>
     */
    public function executableLines(): array
    {
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        return $this->executableLines;
    }

    private function savePropertyLines(Node $node): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
        if (!$node instanceof Property && !$node instanceof Node\Stmt\ClassConst) {
            return;
        }

        foreach (range($node->getStartLine(), $node->getEndLine()) as $index) {
            $this->propertyLines[$index] = $index;
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        if ($node instanceof Property) {
            foreach (range($node->getStartLine(), $node->getEndLine()) as $index) {
                $this->propertyLines[$index] = $index;
            }
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        }
    }

    private function computeReturns(): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
        foreach ($this->returns as $return) {
            foreach (range($return->getStartLine(), $return->getEndLine()) as $loc) {
                if (isset($this->executableLines[$loc])) {
                    continue 2;
                }
            }

            $line = $return->getEndLine();

            if ($return->expr !== null) {
                $line = $return->expr->getStartLine();
            }

            $this->executableLines[$line] = $line;
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        foreach (array_reverse($this->returns) as $node) {
            foreach (range($node->getStartLine(), $node->getEndLine()) as $index) {
                if (isset($this->executableLines[$index])) {
                    continue;
                }
            }

            foreach ($this->getLines($node, true) as $line) {
                $this->executableLines[$line] = $line;
            }
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        }
    }

    /**
     * @return int[]
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
    private function getLines(Node $node): array
    {
        if ($node instanceof BinaryOp) {
            if (($node->left instanceof Node\Scalar ||
                $node->left instanceof Node\Expr\ConstFetch) &&
                ($node->right instanceof Node\Scalar ||
                $node->right instanceof Node\Expr\ConstFetch)) {
                return [$node->right->getStartLine()];
            }

            return [];
        }

        if ($node instanceof Cast ||
            $node instanceof PropertyFetch ||
            $node instanceof NullsafePropertyFetch ||
            $node instanceof StaticPropertyFetch) {
            return [$node->getEndLine()];
        }

        if ($node instanceof ArrayDimFetch) {
            if (null === $node->dim) {
                return [];
            }

            return [$node->dim->getStartLine()];
        }

        if ($node instanceof Array_) {
            $startLine = $node->getStartLine();

            if (isset($this->executableLines[$startLine])) {
                return [];
            }

            if ([] === $node->items) {
                return [$node->getEndLine()];
            }

            if ($node->items[0] instanceof ArrayItem) {
                return [$node->items[0]->getStartLine()];
            }
        }

        if ($node instanceof ClassMethod) {
            if ($node->name->name !== '__construct') {
                return [];
            }

            $existsAPromotedProperty = false;

            foreach ($node->getParams() as $param) {
                if (0 !== ($param->flags & Class_::VISIBILITY_MODIFIER_MASK)) {
                    $existsAPromotedProperty = true;

                    break;
                }
            }

            if ($existsAPromotedProperty) {
                // Only the line with `function` keyword should be listed here
                // but `nikic/php-parser` doesn't provide a way to fetch it
                return range($node->getStartLine(), $node->name->getEndLine());
            }

            return [];
        }

        if ($node instanceof MethodCall) {
            return [$node->name->getStartLine()];
        }

        if ($node instanceof Ternary) {
            $lines = [$node->cond->getStartLine()];

            if (null !== $node->if) {
                $lines[] = $node->if->getStartLine();
            }

            $lines[] = $node->else->getStartLine();
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    private function getLines(NodeAbstract $node, bool $fromReturns): array
    {
        if ($node instanceof Function_ ||
            $node instanceof ClassMethod ||
            $node instanceof Return_ ||
            $node instanceof Expression ||
            $node instanceof Assign ||
            $node instanceof Array_
        ) {
            if (!$fromReturns) {
                $this->returns[] = $node;

                if ($node instanceof ClassMethod && $node->name->name === '__construct') {
                    $existsAPromotedProperty = false;

                    foreach ($node->getParams() as $param) {
                        if (0 !== ($param->flags & Class_::VISIBILITY_MODIFIER_MASK)) {
                            $existsAPromotedProperty = true;

                            break;
                        }
                    }

                    if ($existsAPromotedProperty) {
                        // Only the line with `function` keyword should be listed here
                        // but `nikic/php-parser` doesn't provide a way to fetch it
                        return range($node->getStartLine(), $node->name->getEndLine());
                    }
                }

                return [];
            }

            // ugly fix for non-fully AST based processing
            // self::afterTraverse()/self::computeReturns() should be rewritten using self::leaveNode()
            foreach (range($node->getStartLine(), $node->getEndLine()) as $index) {
                if (isset($this->executableLines[$index]) && !($node instanceof Assign)) {
                    return [];
                }
            }

            // empty function
            if ($node instanceof Function_) {
                return [$node->getEndLine()];
            }

            // empty method
            if ($node instanceof ClassMethod) {
                if (null === $node->stmts) { // method without body (interface prototype)
                    return [];
                }

                return [$node->getEndLine()];
            }
        }

        if ($node instanceof Return_) {
            if ($node->expr === null) {
                return [$node->getEndLine()];
            }

            return $this->getLines($node->expr, $fromReturns);
        }

        if ($node instanceof Expression) {
            return $this->getLines($node->expr, $fromReturns);
        }

        if ($node instanceof Assign) {
            return [$this->getNodeStartLine($node->var)];
        }

        if ($node instanceof BinaryOp) {
            return $fromReturns ? $this->getLines($node->right, $fromReturns) : [];
        }

        if ($node instanceof PropertyFetch ||
            $node instanceof NullsafePropertyFetch ||
            $node instanceof StaticPropertyFetch) {
            return [$this->getNodeStartLine($node->name)];
        }

        if ($node instanceof ArrayDimFetch && null !== $node->dim) {
            return [$this->getNodeStartLine($node->dim)];
        }

        if ($node instanceof MethodCall) {
            return [$this->getNodeStartLine($node->name)];
        }

        if ($node instanceof Ternary) {
            $lines = [$this->getNodeStartLine($node->cond)];

            if (null !== $node->if) {
                $lines[] = $this->getNodeStartLine($node->if);
            }

            $lines[] = $this->getNodeStartLine($node->else);
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0

            return $lines;
        }

        if ($node instanceof Match_) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
            return [$node->cond->getStartLine()];
        }

        if ($node instanceof MatchArm) {
            return [$node->body->getStartLine()];
        }

        if ($node instanceof Expression && (
            $node->expr instanceof Cast ||
            $node->expr instanceof Match_ ||
            $node->expr instanceof MethodCall
        )) {
            return [];
        }

        if ($node instanceof Return_) {
            $this->returns[] = $node;

            return [];
        }

        return [$node->getStartLine()];
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
            return [$this->getNodeStartLine($node->cond)];
        }

        if ($node instanceof MatchArm) {
            return [$this->getNodeStartLine($node->body)];
        }

        // TODO this concept should be extended for every statement class like Foreach_, For_, ...
        if ($node instanceof If_ ||
            $node instanceof ElseIf_ ||
            $node instanceof While_ ||
            $node instanceof Do_) {
            return [$this->getNodeStartLine($node->cond)];
        }

        if ($node instanceof Case_) {
            if (null === $node->cond) { // default case
                return [];
            }

            return [$this->getNodeStartLine($node->cond)];
        }

        if ($node instanceof Catch_) {
            return [$this->getNodeStartLine($node->types[0])];
        }

        return [$this->getNodeStartLine($node)];
    }

    private function getNodeStartLine(NodeAbstract $node): int
    {
        if ($node instanceof Node\Expr\Cast ||
            $node instanceof Node\Expr\BooleanNot ||
            $node instanceof Node\Expr\UnaryMinus ||
            $node instanceof Node\Expr\UnaryPlus
        ) {
            return $this->getNodeStartLine($node->expr);
        }

        if ($node instanceof BinaryOp) {
            return $this->getNodeStartLine($node->right);
        }

        if ($node instanceof Node\Scalar\String_ && (
            $node->getAttribute('kind') === Node\Scalar\String_::KIND_HEREDOC ||
            $node->getAttribute('kind') === Node\Scalar\String_::KIND_NOWDOC
        )) {
            return $node->getStartLine() + 1;
        }

        if ($node instanceof Array_) {
            if ([] === $node->items || $node->items[0] === null) {
                return $node->getEndLine();
            }

            return $this->getNodeStartLine($node->items[0]->value);
        }

        if ($node instanceof Assign) {
            return $this->getNodeStartLine($node->expr);
        }

        return $node->getStartLine(); // $node should be only a scalar here
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    }

    private function isExecutable(Node $node): bool
    {
        return $node instanceof Assign ||
               $node instanceof ArrayDimFetch ||
<<<<<<< HEAD
=======
<<<<<<< HEAD
               $node instanceof Array_ ||
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
               $node instanceof BinaryOp ||
               $node instanceof Break_ ||
               $node instanceof CallLike ||
               $node instanceof Case_ ||
<<<<<<< HEAD
=======
<<<<<<< HEAD
               $node instanceof Cast ||
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
               $node instanceof Catch_ ||
               $node instanceof ClassMethod ||
               $node instanceof Closure ||
               $node instanceof Continue_ ||
               $node instanceof Do_ ||
               $node instanceof Echo_ ||
               $node instanceof ElseIf_ ||
<<<<<<< HEAD
=======
<<<<<<< HEAD
               $node instanceof Else_ ||
               $node instanceof Encapsed ||
               $node instanceof Expression ||
               $node instanceof Finally_ ||
               $node instanceof For_ ||
               $node instanceof Foreach_ ||
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
               $node instanceof Encapsed ||
               $node instanceof Expression ||
               $node instanceof For_ ||
               $node instanceof Foreach_ ||
               $node instanceof Function_ ||
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
               $node instanceof Goto_ ||
               $node instanceof If_ ||
               $node instanceof Match_ ||
               $node instanceof MatchArm ||
               $node instanceof MethodCall ||
               $node instanceof NullsafePropertyFetch ||
<<<<<<< HEAD
=======
<<<<<<< HEAD
               $node instanceof PropertyFetch ||
               $node instanceof Return_ ||
               $node instanceof StaticPropertyFetch ||
               $node instanceof Switch_ ||
               $node instanceof Ternary ||
               $node instanceof Throw_ ||
               $node instanceof TryCatch ||
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
               $node instanceof Print_ ||
               $node instanceof PropertyFetch ||
               $node instanceof Return_ ||
               $node instanceof StaticPropertyFetch ||
               $node instanceof Ternary ||
               $node instanceof Throw_ ||
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
               $node instanceof Unset_ ||
               $node instanceof While_;
    }
}
